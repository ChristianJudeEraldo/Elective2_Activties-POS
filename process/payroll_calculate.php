<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');

    // Basic Income
    $basic_rate   = isset($_POST['basic_rate']) ? floatval($_POST['basic_rate']) : 0;
    $basic_hours  = isset($_POST['basic_hours']) ? floatval($_POST['basic_hours']) : 0;
    $basic_income = $basic_rate * $basic_hours;

    // Honorarium Income
    $honorarium_rate   = isset($_POST['honorarium_rate']) ? floatval($_POST['honorarium_rate']) : 0;
    $honorarium_hours  = isset($_POST['honorarium_hours']) ? floatval($_POST['honorarium_hours']) : 0;
    $honorarium_income = $honorarium_rate * $honorarium_hours;

    // Other Income
    $other_rate   = isset($_POST['other_rate']) ? floatval($_POST['other_rate']) : 0;
    $other_hours  = isset($_POST['other_hours']) ? floatval($_POST['other_hours']) : 0;
    $other_income = $other_rate * $other_hours;

    // Gross Income
    $gross_income = $basic_income + $honorarium_income + $other_income;

    // --- DEDUCTION CALCULATIONS ---

    // SSS Computation
    function computeSSS($gross_income) {
        $sss_table = [
            [1000, 1249.99, 36.30],
            [1250, 1749.99, 54.50],
            [1750, 2249.99, 72.70],
            [2250, 2749.99, 90.80],
            [2750, 3249.99, 109.00],
            [3250, 3749.99, 127.20],
            [3750, 4249.99, 145.30],
            [4250, 4749.99, 163.50],
            [4750, 5249.99, 181.80],
            [5250, 5749.99, 199.90],
            [5750, 6249.99, 218.10],
            [6250, 6749.99, 236.30],
            [6750, 7249.99, 254.50],
            [7250, 7749.99, 272.70],
            [7750, 8249.99, 290.80],
            [8250, 8749.99, 309.00],
            [8750, 9249.99, 327.20],
            [9250, 9749.99, 345.30],
            [9750, 10249.99, 363.50],
            [10250, 10749.99, 381.70],
            [10750, 11249.99, 399.80],
            [11250, 11749.99, 418.00],
            [11750, 12249.99, 436.20],
            [12250, 12749.99, 454.30],
            [12750, 13249.99, 472.50],
            [13250, 13749.99, 490.70],
            [13750, 14249.99, 508.80],
            [14250, 14749.99, 527.00],
            [14750, 15249.99, 545.20],
            [15250, 15749.99, 563.30],
            [15750, 999999, 581.30],
        ];

        foreach ($sss_table as $row) {
            if ($gross_income >= $row[0] && $gross_income <= $row[1]) {
                return $row[2];
            }
        }
        return 0;
    }

    // PhilHealth Computation
    function computePhilHealth($gross_income) {
        $philhealth_table = [
            [0, 8999.99, 100.00],
            [9000, 9999.99, 112.50],
            [10000, 10999.99, 125.00],
            [11000, 11999.99, 137.50],
            [12000, 12999.99, 150.00],
            [13000, 13999.99, 162.50],
            [14000, 14999.99, 175.00],
            [15000, 15999.99, 187.50],
            [16000, 16999.99, 200.00],
            [17000, 17999.99, 212.50],
            [18000, 18999.99, 225.00],
            [19000, 19999.99, 237.50],
            [20000, 20999.99, 250.00],
            [21000, 21999.99, 262.50],
            [22000, 22999.99, 275.00],
            [23000, 23999.99, 287.50],
            [24000, 24999.99, 300.00],
            [25000, 25999.99, 312.50],
            [26000, 26999.99, 325.00],
            [27000, 27999.99, 337.50],
            [28000, 28999.99, 350.00],
            [29000, 29999.99, 362.50],
            [30000, 30999.99, 375.00],
            [31000, 31999.99, 387.50],
            [32000, 32999.99, 400.00],
            [33000, 33999.99, 412.50],
            [34000, 34999.99, 425.00],
            [35000, 999999, 437.50],
        ];

        foreach ($philhealth_table as $row) {
            if ($gross_income >= $row[0] && $gross_income <= $row[1]) {
                return $row[2];
            }
        }
        return 0;
    }

    // Income Tax Computation
    function computeIncomeTax($gross_income) {
        $tax_table = [
            [0, 20833, 0, 0, 0],
            [20833, 33332, 0, 0.20, 20833],
            [33333, 66666, 2500, 0.25, 33333],
            [66667, 166666, 10833.33, 0.30, 66667],
            [166667, 666666, 40833.33, 0.32, 166667],
            [666667, 999999999, 200833.33, 0.35, 666667],
        ];
        foreach ($tax_table as $row) {
            list($min, $max, $base_tax, $rate, $excess_over) = $row;
            if ($gross_income >= $min && $gross_income <= $max) {
                return $base_tax + ($gross_income - $excess_over) * $rate;
            }
        }
        return 0;
    }

    // Pag-IBIG Computation
    function computePagIBIG($gross_income) {
        $maxFundSalary = 10000.0;
        $fundSalary = min($gross_income, $maxFundSalary);
        $employeeRate = ($fundSalary <= 1500) ? 0.01 : 0.02;
        return round($fundSalary * $employeeRate, 2);
    }

    // If only computing gross and government contributions
    if (!isset($_POST['sss_loan'])) {
        echo json_encode([
            'basic_income'            => number_format($basic_income, 2, '.', ''),
            'honorarium_income'       => number_format($honorarium_income, 2, '.', ''),
            'other_income'            => number_format($other_income, 2, '.', ''),
            'gross_income'            => number_format($gross_income, 2, '.', ''),
            'sss'                     => number_format(computeSSS($gross_income), 2, '.', ''),
            'philhealth_contribution' => number_format(computePhilHealth($gross_income), 2, '.', ''),
            'incometax_contribution'  => number_format(computeIncomeTax($gross_income), 2, '.', ''),
            'pagibig_contribution'    => number_format(computePagIBIG($gross_income), 2, '.', ''),
        ]);
        exit;
    }

    // If NET INCOME calculation (includes other loans)
    $sss        = floatval($_POST['sss']);
    $philhealth = floatval($_POST['philhealth_contribution']);
    $pagibig    = floatval($_POST['pagibig_contribution']);
    $incometax  = floatval($_POST['incometax_contribution']);

    $sss_loan                = floatval($_POST['sss_loan']);
    $pagibig_loan            = floatval($_POST['pagibig_loan']);
    $faculty_savings_deposit = floatval($_POST['faculty_savings_deposit']);
    $faculty_savings_loans   = floatval($_POST['faculty_savings_loans']);
    $salary_loans            = floatval($_POST['salary_loans']);
    $other_loans             = floatval($_POST['other_loans']);

    $total_deductions = $sss + $philhealth + $pagibig + $incometax
        + $sss_loan + $pagibig_loan + $faculty_savings_deposit
        + $faculty_savings_loans + $salary_loans + $other_loans;

    $net_income = $gross_income - $total_deductions;

    echo json_encode([
        'total_deductions' => number_format($total_deductions, 2, '.', ''),
        'net_income'       => number_format($net_income, 2, '.', ''),
    ]);
    exit;
}

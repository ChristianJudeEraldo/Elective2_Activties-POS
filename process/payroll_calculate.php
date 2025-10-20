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
        [1000, 1249.99, 73.70],
        [1250, 1749.99, 110.50],
        [1750, 2249.99, 147.30],
        [2250, 2749.99, 184.20],
        [2750, 3249.99, 221.00],
        [3250, 3749.99, 257.80],
        [3750, 4249.99, 294.70],
        [4250, 4749.99, 331.50],
        [4750, 5249.99, 368.30],
        [5250, 5749.99, 405.20],
        [5750, 6249.99, 442.00],
        [6250, 6749.99, 478.80],
        [6750, 7249.99, 515.70],
        [7250, 7749.99, 552.50],
        [7750, 8249.99, 589.30],
        [8250, 8749.99, 626.20],
        [8750, 9249.99, 663.00],
        [9250, 9749.99, 699.80],
        [9750, 10249.99, 736.70],
        [10250, 10749.99, 773.50],
        [10750, 11249.99, 810.30],
        [11250, 11749.99, 847.20],
        [11750, 12249.99, 884.00],
        [12250, 12749.99, 920.80],
        [12750, 13249.99, 957.70],
        [13250, 13749.99, 994.50],
        [13750, 14249.99, 1031.30],
        [14250, 14749.99, 1068.20],
        [14750, 15249.99, 1105.00],
        [15250, 15749.99, 1141.80],
        [15750, 999999, 1178.70], 
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

    // Income Tax Computation (Semi-Monthly)
    function computeIncomeTax($gross_income) {
    // Semi-monthly tax table (based on the image)
    $tax_table = [
        [0, 10417, 0, 0.00, 0],
        [10417, 16666, 0, 0.20, 10417],
        [16667, 33332, 1250, 0.25, 16667],
        [33333, 83332, 5416.67, 0.30, 33333],
        [83333, 333332, 20416.67, 0.32, 83333],
        [333333, 999999999, 100416.67, 0.35, 333333],
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
        // Fixed Pag-IBIG contribution
        return 100.00;
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

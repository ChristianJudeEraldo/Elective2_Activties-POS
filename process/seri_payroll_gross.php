<?php
$pagibig_contri = 100.00;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 1. Getting data from inputs (Matches the keys sent by your seri_payroll.js)
    $basic_rate_hour        = isset($_POST['basic_rate_hour']) ? floatval($_POST['basic_rate_hour']) : 0;
    $basic_num_hours_cutoff = isset($_POST['basic_num_hours_cutoff']) ? floatval($_POST['basic_num_hours_cutoff']) : 0;

    $hono_rate_hour        = isset($_POST['hono_rate_hour']) ? floatval($_POST['hono_rate_hour']) : 0;
    $hono_num_hours_cutoff = isset($_POST['hono_num_hours_cutoff']) ? floatval($_POST['hono_num_hours_cutoff']) : 0;

    $other_rate_hour        = isset($_POST['other_rate_hour']) ? floatval($_POST['other_rate_hour']) : 0;
    $other_num_hours_cutoff = isset($_POST['other_num_hours_cutoff']) ? floatval($_POST['other_num_hours_cutoff']) : 0;

    // 2. Compute Incomes
    $basic_income_cutoff = $basic_rate_hour * $basic_num_hours_cutoff;
    $hono_income_cutoff  = $hono_rate_hour * $hono_num_hours_cutoff;
    $other_income_cutoff = $other_rate_hour * $other_num_hours_cutoff;

    // 3. Compute Gross Income
    $gross_income = $basic_income_cutoff + $hono_income_cutoff + $other_income_cutoff;

    // 4. SSS Contribution (Based on your provided table)
    $sss_contri = 0.00;
    if ($gross_income >= 0 && $gross_income <= 999) {
        $sss_contri = 0.00;
    } else if ($gross_income >= 1000 && $gross_income <= 1249) {
        $sss_contri = 73.70;
    } else if ($gross_income >= 1250 && $gross_income <= 1749) {
        $sss_contri = 110.50;
    } else if ($gross_income >= 1750 && $gross_income <= 2249) {
        $sss_contri = 147.30;
    } else if ($gross_income >= 2250 && $gross_income <= 2749.99) {
        $sss_contri = 184.20;
    } else if ($gross_income >= 2750 && $gross_income <= 3249.99) {
        $sss_contri = 221.00;
    } else if ($gross_income >= 3250 && $gross_income <= 3749.99) {
        $sss_contri = 257.80;
    } else if ($gross_income >= 3750 && $gross_income <= 4249.99) {
        $sss_contri = 294.70;
    } else if ($gross_income >= 4250 && $gross_income <= 4749.99) {
        $sss_contri = 331.50;
    } else if ($gross_income >= 4750 && $gross_income <= 5249.99) {
        $sss_contri = 368.30;
    } else if ($gross_income >= 5250 && $gross_income <= 5749.99) {
        $sss_contri = 405.20;
    } else if ($gross_income >= 5750 && $gross_income <= 6249.99) {
        $sss_contri = 442.00;
    } else if ($gross_income >= 6250 && $gross_income <= 6749.99) {
        $sss_contri = 478.80;
    } else if ($gross_income >= 6750 && $gross_income <= 7249.99) {
        $sss_contri = 515.70;
    } else if ($gross_income >= 7250 && $gross_income <= 7749.99) {
        $sss_contri = 552.50;
    } else if ($gross_income >= 7750 && $gross_income <= 8249.99) {
        $sss_contri = 589.30;
    } else if ($gross_income >= 8250 && $gross_income <= 8749.99) {
        $sss_contri = 626.20;
    } else if ($gross_income >= 8750 && $gross_income <= 9249.99) {
        $sss_contri = 663.00;
    } else if ($gross_income >= 9250 && $gross_income <= 9749.99) {
        $sss_contri = 699.80;
    } else if ($gross_income >= 9750 && $gross_income <= 10249.99) {
        $sss_contri = 736.70;
    } else if ($gross_income >= 10250 && $gross_income <= 10749.99) {
        $sss_contri = 773.50;
    } else if ($gross_income >= 10750 && $gross_income <= 11249.99) {
        $sss_contri = 810.30;
    } else if ($gross_income >= 11250 && $gross_income <= 11749.99) {
        $sss_contri = 847.20;
    } else if ($gross_income >= 11750 && $gross_income <= 12249.99) {
        $sss_contri = 884.00;
    } else if ($gross_income >= 12250 && $gross_income <= 12749.99) {
        $sss_contri = 920.80;
    } else if ($gross_income >= 12750 && $gross_income <= 13249.99) {
        $sss_contri = 957.70;
    } else if ($gross_income >= 13250 && $gross_income <= 13749.99) {
        $sss_contri = 994.50;
    } else if ($gross_income >= 13750 && $gross_income <= 14249.99) {
        $sss_contri = 1031.30;
    } else if ($gross_income >= 14250 && $gross_income <= 14749.99) {
        $sss_contri = 1068.20;
    } else if ($gross_income >= 14750 && $gross_income <= 15249.99) {
        $sss_contri = 1105.00;
    } else if ($gross_income >= 15250 && $gross_income <= 15749.99) {
        $sss_contri = 1141.80;
    } else {
        $sss_contri = 1178.70;
    }

    // 5. PhilHealth Contribution (Based on your provided table)
    $philH_contri = 0.00;
    if ($gross_income <= 8999.99 && $gross_income >= 0) {
        $philH_contri = 100.00;
    } else if ($gross_income >= 9000 && $gross_income <= 9999.99) {
        $philH_contri = 112.50;
    } else if ($gross_income >= 10000 && $gross_income <= 10999.99) {
        $philH_contri = 125.00;
    } else if ($gross_income >= 11000 && $gross_income <= 11999.99) {
        $philH_contri = 137.50;
    } else if ($gross_income >= 12000 && $gross_income <= 12999.99) {
        $philH_contri = 150.00;
    } else if ($gross_income >= 13000 && $gross_income <= 13999.99) {
        $philH_contri = 162.50;
    } else if ($gross_income >= 14000 && $gross_income <= 14999.99) {
        $philH_contri = 175.00;
    } else if ($gross_income >= 15000 && $gross_income <= 15999.99) {
        $philH_contri = 187.50;
    } else if ($gross_income >= 16000 && $gross_income <= 16999.99) {
        $philH_contri = 200.00;
    } else if ($gross_income >= 17000 && $gross_income <= 17999.99) {
        $philH_contri = 212.50;
    } else if ($gross_income >= 18000 && $gross_income <= 18999.99) {
        $philH_contri = 225.00;
    } else if ($gross_income >= 19000 && $gross_income <= 19999.99) {
        $philH_contri = 237.50;
    } else if ($gross_income >= 20000 && $gross_income <= 20999.99) {
        $philH_contri = 250.00;
    } else if ($gross_income >= 21000 && $gross_income <= 21999.99) {
        $philH_contri = 262.50;
    } else if ($gross_income >= 22000 && $gross_income <= 22999.99) {
        $philH_contri = 275.00;
    } else if ($gross_income >= 23000 && $gross_income <= 23999.99) {
        $philH_contri = 287.50;
    } else if ($gross_income >= 24000 && $gross_income <= 24999.99) {
        $philH_contri = 300.00;
    } else if ($gross_income >= 25000 && $gross_income <= 25999.99) {
        $philH_contri = 312.50;
    } else if ($gross_income >= 26000 && $gross_income <= 26999.99) {
        $philH_contri = 325.00;
    } else if ($gross_income >= 27000 && $gross_income <= 27999.99) {
        $philH_contri = 337.50;
    } else if ($gross_income >= 28000 && $gross_income <= 28999.99) {
        $philH_contri = 350.00;
    } else if ($gross_income >= 29000 && $gross_income <= 29999.99) {
        $philH_contri = 362.50;
    } else if ($gross_income >= 30000 && $gross_income <= 30999.99) {
        $philH_contri = 375.00;
    } else if ($gross_income >= 31000 && $gross_income <= 31999.99) {
        $philH_contri = 387.50;
    } else if ($gross_income >= 32000 && $gross_income <= 32999.99) {
        $philH_contri = 400.00;
    } else if ($gross_income >= 33000 && $gross_income <= 33999.99) {
        $philH_contri = 412.50;
    } else if ($gross_income >= 34000 && $gross_income <= 34999.99) {
        $philH_contri = 425.00;
    } else {
        $philH_contri = 437.50;
    }

    // 6. Tax Contribution
    // Corrected Formula: Tax is calculated on the EXCESS over the lower bracket.
    // e.g., (Gross Income - Lower Bound) * Rate
    $tax_contri = 0.00;
    if ($gross_income <= 10417 && $gross_income >= 0) {
        $tax_contri = 0.00;
    } else if ($gross_income > 10417 && $gross_income <= 16667) {
        $tax_contri = 0 + (($gross_income - 10417) * 0.20);
    } else if ($gross_income > 16667 && $gross_income <= 33333) {
        $tax_contri = 1250 + (($gross_income - 16667) * 0.25);
    } else if ($gross_income > 33333 && $gross_income <= 83333) {
        $tax_contri = 5416.67 + (($gross_income - 33333) * 0.30);
    } else if ($gross_income > 83333 && $gross_income <= 333333) {
        $tax_contri = 20416.67 + (($gross_income - 83333) * 0.32);
    } else if ($gross_income > 333333) {
        $tax_contri = 100416.67 + (($gross_income - 333333) * 0.35);
    }

    // 7. Return Results as JSON
    echo json_encode([
        'basic_income_cutoff' => $basic_income_cutoff,
        'hono_income_cutoff'  => $hono_income_cutoff,
        'other_income_cutoff' => $other_income_cutoff,
        'gross_income'        => $gross_income,
        'sss_contri'          => $sss_contri,
        'pagibig_contri'      => $pagibig_contri,
        'philH_contri'        => $philH_contri,
        'tax_contri'          => $tax_contri,
    ]);
}

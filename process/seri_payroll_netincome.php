<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //getting data for regular deduction computation
    $sss_contri = $_POST['sss_contri'] ?
    trim($_POST['sss_contri']) - 0 : 0;
    $pagibig_contri = $_POST['pagibig_contri'] ?
    trim($_POST['pagibig_contri']) - 0 : 0;
    $philH_contri = $_POST['philH_contri'] ?
    trim($_POST['philH_contri']) - 0 : 0;
    $tax_contri = $_POST['tax_contri'] ?
    trim($_POST['tax_contri']) - 0 : 0;

    //getting data for other deduction computation
    $sss_loan = $_POST['sss_loan'] ?
    trim($_POST['sss_loan']) - 0 : 0;
    $pagibig_loan = $_POST['pagibig_loan'] ?
    trim($_POST['pagibig_loan']) - 0 : 0;
    $fs_deposit = $_POST['fs_deposit'] ?
    trim($_POST['fs_deposit']) - 0 : 0;
    $fs_loan = $_POST['fs_loan'] ?
    trim($_POST['fs_loan']) - 0 : 0;
    $salary_loan = $_POST['salary_loan'] ?
    trim($_POST['salary_loan']) - 0 : 0;
    $other_loans = $_POST['other_loans'] ?
    trim($_POST['other_loans']) - 0 : 0;

    //get data from input GROSS INCOME
    $gross_income = $_POST['gross_income'] ?
    trim($_POST['gross_income']) - 0 : 0;

    //formula for the computations of regular deduction
    $regular_deduction = $pagibig_contri + $sss_contri + $philH_contri + $tax_contri;

    //formula for the computations of other deduction
    $other_deduction = $pagibig_loan + $sss_loan + $fs_deposit + $fs_loan + $salary_loan + $other_loans;

    //formula for computed total deduction
    $total_deduction = $regular_deduction + $other_deduction;

    //formula for computing the NET INCOME of employee per cutoff
    $net_income = $gross_income - $total_deduction;

    //return results
    echo json_encode([
        'total_deduct' => $total_deduction,
        'net_income'   => $net_income,
    ]);
}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>JUDE`S CHOICE PAYROLL</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/payrol.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="js/seri_payroll.js?v.1"></script>
  <script src="js/seri_payroll_save.js?v.1"></script>

  <style>
    /* Increase size of the five action buttons */
    .action-btn {
        padding: 3px 4px;
        font-size: 10px;
        min-width: 70px;
        height: 35px;
        border-radius: 3px;
        flex: 0 0 auto;
    }


    #btn_gross_income,
    #btn_net_income {
      font-weight: 500;
    }


    /* Ensure buttons don't wrap badly on small screens */
    .d-flex .action-btn {
      white-space: nowrap;
    }
  </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="payroll-card p-4">
            <h3 class="text-center mb-4 main-title">JUDE`S CHOICE PAYROLL</h3>

            <div class="row">
                <div class="col-md-6 border-right pr-4">
                    <h6 class="mb-3 section-heading">EMPLOYEE BASIC INFO:</h6>

                    <div class="text-center">
                        <div class="employee-photo-frame">
                            <img src="https://www.drupal.org/files/issues/10354686_10150004552801856_220367501106153455_n.jpg" alt="Employee Photo" class="employee-photo-img">
                        </div>
                    </div>

                    <form>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Employee Number:</label>
                            <div class="col-sm-8 d-flex">
                                <input type="text" class="form-control form-control-sm flex-grow-1" id="employee_no">
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Search Employee:</label>
                            <div class="col-sm-8 d-flex">

                                <button class="btn btn-danger btn-sm search-btn">SEARCH</button>
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Department:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" value="" readonly>
                            </div>
                        </div>

                        <h6 class="section-title">BASIC INCOME:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Rate / Hour:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="basic_rate"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="basic_hours"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="basic_income" readonly></div>
                        </div>

                        <h6 class="section-title">HONORARIUM INCOME:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Rate / Hour:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="honorarium_rate"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="honorarium_hours"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="honorarium_income" readonly></div>
                        </div>

                        <h6 class="section-title">OTHER INCOME:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Rate / Hour:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="other_rate"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="other_hours"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="other_income" readonly></div>
                        </div>

                        <h6 class="section-title">SUMMARY INCOME:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Gross Income:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id="gross_income" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Net Income:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" id ="net_income" readonly></div>
                        </div>

                        <div class="d-flex flex-wrap justify-content-between mt-3 button-group">
                            <!-- buttons removed from left column (moved to right column) -->
                        </div>
                    </form>
                </div>

                <div class="col-md-6 pl-4 d-flex flex-column justify-content-between">
                    <form>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Firstname:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Middle Name:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Surname:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Civil Status:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Qualified Dependents:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value=""></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Paydate:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" id="paydate"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Employee Status:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label input-label">Designation:</label>
                            <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                        </div>

                        <h6 class="section-title">REGULAR DEDUCTIONS:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">SSS Contribution:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="sss" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">PhilHealth Contribution:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="philhealth_contribution" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Pagibig Contribution:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="pagibig_contribution" readonly></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Income Tax Contribution:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="incometax_contribution" readonly></div>
                        </div>

                        <h6 class="section-title">OTHER DEDUCTIONS:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">SSS Loan:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="sss_loan"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Pagibig Loan:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="pagibig_loan"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Faculty Savings Deposit:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="faculty_savings_deposit"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Faculty Savings Loans:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="faculty_savings_loans"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Salary Loans:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="salary_loans"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Other Loans:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value="" id="other_loans"></div>
                        </div>

                        <h6 class="section-title">DEDUCTION SUMMARY:</h6>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-6 col-form-label input-label">Total Deductions:</label>
                            <div class="col-sm-6"><input type="text" class="form-control form-control-sm" id="total_deductions" readonly></div>
                        </div>
                        <!-- all action buttons placed on the right side -->
                        <div class="mt-3 d-flex justify-content-end" style="gap:10px;">
                            <button id="btn_gross_income" class="btn btn-primary action-btn">GROSS INCOME</button>
                            <button id="btn_net_income" class="btn btn-primary action-btn" name="calculate">NET INCOME</button>
                            <button id="btn_save" class="btn btn-info action-btn">SAVE</button>
                            <button id="btn_update" class="btn btn-info action-btn">UPDATE</button>
                            <button id="btn_new" class="btn btn-warning action-btn">NEW</button>
                        </div>
                     </form>
                 </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            function calculatePayroll(calcType) {
                var basic_rate = parseFloat($('#basic_rate').val()) || 0;
                var basic_hours = parseFloat($('#basic_hours').val()) || 0;

                var honorarium_rate = parseFloat($('#honorarium_rate').val()) || 0;
                var honorarium_hours = parseFloat($('#honorarium_hours').val()) || 0;

                var other_rate = parseFloat($('#other_rate').val()) || 0;
                var other_hours = parseFloat($('#other_hours').val()) || 0;

                // Sum all deduction fields (readonly and editable)
                var total_deductions = 0;
                $('.col-md-6.pl-4 input[readonly]').each(function() {
                    var val = parseFloat($(this).val()) || 0;
                    total_deductions += val;
                });
                $('.col-md-6.pl-4 input:not([readonly])').each(function() {
                    var val = parseFloat($(this).val()) || 0;
                    total_deductions += val;
                });

                $.ajax({
                    url: 'process/payroll_calculate.php',
                    method: 'POST',
                    data: {
                        basic_rate: basic_rate,
                        basic_hours: basic_hours,
                        honorarium_rate: honorarium_rate,
                        honorarium_hours: honorarium_hours,
                        other_rate: other_rate,
                        other_hours: other_hours,
                        total_deductions: total_deductions
                    },
                    dataType: 'json',
                    success: function (response) {
                        $('#basic_income').val(response.basic_income);
                        $('#honorarium_income').val(response.honorarium_income);
                        $('#other_income').val(response.other_income);
                        if (calcType === 'gross') {
                            $('#gross_income').val(response.gross_income);
                            $('#sss').val(response.sss);
                            $('#philhealth_contribution').val(response.philhealth_contribution);
                            $('#incometax_contribution').val(response.incometax_contribution);
                            $('#pagibig_contribution').val(response.pagibig_contribution);



                        }
                        if (calcType === 'net') {
                            $('#gross_income').val(response.gross_income);
                            $('#total_deductions').val(response.total_deductions);
                            $('#net_income').val(response.net_income);
                        }
                    }
                });
            }

            // Only update when buttons are clicked
            $('.action-btn').filter(function() {
                return $(this).text().trim() === 'GROSS INCOME';
            }).click(function(e) {
                e.preventDefault();
                calculatePayroll('gross');
            });

            $('.action-btn').filter(function() {
                return $(this).text().trim() === 'NET INCOME';
            }).click(function(e) {
                e.preventDefault();
                calculatePayroll('net');
            });

            $('#btn_net_income').click(function(e) {
                e.preventDefault();
                   // Fetch all input values
                    var data = {
                        basic_rate: $('#basic_rate').val(),
                        basic_hours: $('#basic_hours').val(),
                        honorarium_rate: $('#honorarium_rate').val(),
                        honorarium_hours: $('#honorarium_hours').val(),
                        other_rate: $('#other_rate').val(),
                        other_hours: $('#other_hours').val(),

                        sss: $('#sss').val(),
                        philhealth_contribution: $('#philhealth_contribution').val(),
                        pagibig_contribution: $('#pagibig_contribution').val(),
                        incometax_contribution: $('#incometax_contribution').val(),

                        sss_loan: $('#sss_loan').val(),
                        pagibig_loan: $('#pagibig_loan').val(),
                        faculty_savings_deposit: $('#faculty_savings_deposit').val(),
                        faculty_savings_loans: $('#faculty_savings_loans').val(),
                        salary_loans: $('#salary_loans').val(),
                        other_loans: $('#other_loans').val()
                    };

                    $.ajax({
                        url: 'process/payroll_calculate.php',
                        method: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function(response) {
                            $('#total_deductions').val(response.total_deductions);
                            $('#net_income').val(response.net_income);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error:", error);
                            alert("Something went wrong while calculating net income.");
                                    }
                });
            });
        });

            $('#btn_new').click(function(e) {
            e.preventDefault();
            // Clear all textboxes and dropdowns
            $('input[type="text"], input[type="number"]').val('');
            $('select').prop('selectedIndex', 0);
            $('#basic_rate').focus();
        });
    </script>
</body>

</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Content-Type: application/json');

        // Income calculations
        $basic_rate   = isset($_POST['basic_rate']) ? floatval($_POST['basic_rate']) : 0;
        $basic_hours  = isset($_POST['basic_hours']) ? floatval($_POST['basic_hours']) : 0;
        $basic_income = $basic_rate * $basic_hours;

        $honorarium_rate   = isset($_POST['honorarium_rate']) ? floatval($_POST['honorarium_rate']) : 0;
        $honorarium_hours  = isset($_POST['honorarium_hours']) ? floatval($_POST['honorarium_hours']) : 0;
        $honorarium_income = $honorarium_rate * $honorarium_hours;

        $other_rate   = isset($_POST['other_rate']) ? floatval($_POST['other_rate']) : 0;
        $other_hours  = isset($_POST['other_hours']) ? floatval($_POST['other_hours']) : 0;
        $other_income = $other_rate * $other_hours;

        $gross_income = $basic_income + $honorarium_income + $other_income;

        // Deductions
        $total_deductions = isset($_POST['total_deductions']) ? floatval($_POST['total_deductions']) : 0;

        // Net income
        $net_income = $gross_income - $total_deductions;

        echo json_encode([
            'basic_income'      => number_format($basic_income, 2, '.', ''),
            'honorarium_income' => number_format($honorarium_income, 2, '.', ''),
            'other_income'      => number_format($other_income, 2, '.', ''),
            'gross_income'      => number_format($gross_income, 2, '.', ''),
            'net_income'        => number_format($net_income, 2, '.', ''),
        ]);
    }
?>


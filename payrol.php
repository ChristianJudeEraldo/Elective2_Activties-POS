<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JUDE`S CHOICE PAYROLL</title>
    <link rel="stylesheet" href="payrol.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="payroll-card p-4">
        <h4 class="text-center mb-4 main-title">JUDE`S CHOICE PAYROLL</h4>
        
        <div class="row">
            <div class="col-md-6 border-right pr-4">
                <h6 class="mb-3 section-heading">EMPLOYEE BASIC INFO:</h6>
                
                <div class="text-center mb-3">
                  <div class="employee-photo-frame">
                    <img src="https://www.drupal.org/files/issues/10354686_10150004552801856_220367501106153455_n.jpg" alt="Employee Photo" class="employee-photo-img">
                  </div>
                </div>
                
                <form>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Employee Number:</label>
                        <div class="col-sm-8 d-flex">
                            <input type="text" class="form-control form-control-sm flex-grow-1">
                            </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Search Employee:</label>
                        <div class="col-sm-8 d-flex">
                            
                            <button class="btn btn-danger btn-sm ml-2 search-btn">SEARCH</button>
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
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" readonly></div>
                    </div>

                    <h6 class="section-title">HONORARIUM INCOME:</h6>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Rate / Hour:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" readonly></div>
                    </div>

                    <h6 class="section-title">OTHER INCOME:</h6>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Rate / Hour:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">No. of Hours / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Income / Cut Off:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" readonly></div>
                    </div>

                    <h6 class="section-title">SUMMARY INCOME:</h6>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Gross Income:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" readonly></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Net Income:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" readonly></div>
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
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-4 col-form-label input-label">Paydate:</label>
                        <div class="col-sm-8"><input type="text" class="form-control form-control-sm" value="" readonly></div>
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
                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value=""></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-6 col-form-label input-label">PhilHealth Contribution:</label>
                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value=""></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-6 col-form-label input-label">Pagibig Contribution:</label>
                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value=""></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-6 col-form-label input-label">Income Tax Contribution:</label>
                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm" value=""></div>
                    </div>

                    <h6 class="section-title">OTHER DEDUCTIONS:</h6>
                    <?php
                        $deductions = ["SSS Loan", "Pagibig Loan", "Faculty Saving Deposit", "Faculty Saving Loan", "Salary Loan", "Other Loans"];
                        foreach($deductions as $d) {
                            echo '<div class="form-group row align-items-center">
                                        <label class="col-sm-6 col-form-label input-label">'.$d.':</label>
                                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm"></div>
                                      </div>';
                        }
                    ?>

                    <h6 class="section-title">DEDUCTION SUMMARY:</h6>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-6 col-form-label input-label">Total Deductions:</label>
                        <div class="col-sm-6"><input type="text" class="form-control form-control-sm" readonly></div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between mt-3 button-group">
                        <button class="btn btn-primary action-btn my-1">GROSS INCOME</button>
                        <button class="btn btn-primary action-btn my-1">NET INCOME</button>
                        <button class="btn btn-info action-btn my-1">SAVE</button>
                        <button class="btn btn-info action-btn my-1">UPDATE</button>
                        <button class="btn btn-warning action-btn my-1">NEW</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
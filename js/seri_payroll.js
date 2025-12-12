$(document).ready(function() {
    //event listener for GROSS INCOME button
    $('#btn_gross_income').click(function(e) {
        e.preventDefault();
        var basic_rate_hour = $('#basic_rate').val();
        var basic_num_hours_cutoff = $('#basic_hours').val();
        var hono_rate_hour = $('#honorarium_rate').val();
        var hono_num_hours_cutoff = $('#honorarium_hours').val();
        var other_rate_hour = $('#other_rate').val();
        var other_num_hours_cutoff = $('#other_hours').val();

        var data_string = 'basic_rate_hour=' + basic_rate_hour;
        data_string += '&basic_num_hours_cutoff=' + basic_num_hours_cutoff;
        data_string += '&hono_rate_hour=' + hono_rate_hour;
        data_string += '&hono_num_hours_cutoff=' + hono_num_hours_cutoff;
        data_string += '&other_rate_hour=' + other_rate_hour;
        data_string += '&other_num_hours_cutoff=' + other_num_hours_cutoff;

        $.ajax({
            type: 'POST',
            url: 'process/seri_payroll_gross.php',
            data: data_string,
            dataType: 'json',
            success: function(result) {
                var basic_income_cutoff = result.basic_income_cutoff;
                var hono_income_cutoff = result.hono_income_cutoff;
                var other_income_cutoff = result.other_income_cutoff;
                var gross_income = result.gross_income;
                var sss_contri = result.sss_contri;
                var pagibig_contri = result.pagibig_contri;
                var philH_contri = result.philH_contri;
                var tax_contri = result.tax_contri;

                $('#basic_income').val(basic_income_cutoff);
                $('#honorarium_income').val(hono_income_cutoff);
                $('#other_income').val(other_income_cutoff);
                $('#gross_income').val(gross_income);
                $('#sss').val(sss_contri);
                $('#pagibig_contribution').val(pagibig_contri);
                $('#philhealth_contribution').val(philH_contri);
                $('#incometax_contribution').val(tax_contri);
            }
        })
    });

    //event listener for NET INCOME button
    $('#btn_net_income').click(function(e) {
        e.preventDefault();
        var sss_contri = $('#sss').val();
        var pagibig_contri = $('#pagibig_contribution').val();
        var philH_contri = $('#philhealth_contribution').val();
        var tax_contri = $('#incometax_contribution').val();
        var sss_loan = $('#sss_loan').val();
        var pagibig_loan = $('#pagibig_loan').val();
        var fs_deposit = $('#faculty_savings_deposit').val() - 0;
        var fs_loan = $('#faculty_savings_loans').val();
        var salary_loan = $('#salary_loans').val();
        var other_loans = $('#other_loans').val();
        var gross_income = $('#gross_income').val();

        var data_string = 'sss_contri=' + sss_contri;
        data_string += '&pagibig_contri=' + pagibig_contri;
        data_string += '&philH_contri=' + philH_contri;
        data_string += '&tax_contri=' + tax_contri;
        data_string += '&sss_loan=' + sss_loan;
        data_string += '&pagibig_loan=' + pagibig_loan;
        data_string += '&fs_deposit=' + fs_deposit;
        data_string += '&fs_loan=' + fs_loan;
        data_string += '&salary_loan=' + salary_loan;
        data_string += '&other_loans=' + other_loans;
        data_string += '&gross_income=' + gross_income;

        $.ajax({
            type: 'POST',
            url: 'process/seri_payroll_netincome.php',
            data: data_string,
            dataType: 'json',
            success: function(result) {
                var total_deduct = result.total_deduct;
                var net_income = result.net_income;
                $('#total_deductions').val(total_deduct);
                $('#net_income').val(net_income);
            }
        })
    });

    //event listener for NEW button
    $('#btn_new').click(function(e) {
        e.preventDefault();
        $('#basic_rate').val('');
        $('#basic_hours').val('');
        $('#basic_income').val('');
        $('#honorarium_rate').val('');
        $('#honorarium_hours').val('');
        $('#honorarium_income').val('');
        $('#other_rate').val('');
        $('#other_hours').val('');
        $('#other_income').val('');
        $('#gross_income').val('');
        $('#net_income').val('');
        $('#sss').val('');
        $('#pagibig_contribution').val('');
        $('#philhealth_contribution').val('');
        $('#incometax_contribution').val('');
        $('#sss_loan').val('');
        $('#pagibig_loan').val('');
        $('#faculty_savings_deposit').val('');
        $('#faculty_savings_loans').val('');
        $('#salary_loans').val('');
        $('#other_loans').val('');
        $('#total_deductions').val('');
    });
});
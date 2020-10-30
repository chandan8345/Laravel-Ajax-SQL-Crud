$(document).ready(function () {
    //CREATE
    $('#frm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/Laravel-Ajax-SQL-Crud/crud/public/create',
            data: $("#frm").serialize(),
            success: function (response) {
                $("#frm").trigger('reset');
                $("#addEmployeeModal").modal('hide');
                //userlist();
                console.log(response);
            },
            error: function (error) {
                $("#addEmployeeModal").modal('hide');
                alert('error');
            }
        });
    });
    
});
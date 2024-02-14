$(document).ready(function(){

    console.log(pathname);
    let dataTables = $('#files-table').DataTable({
        processing: true,
        serverSide: true,
        orderCellsTop: true,
        ajax: url+'/getFiles/'+pathname[5],
        'createdRow': function (row, data, rowIndex) {
            // Per-cell function to do whatever needed with cells
            $(row).attr('data-id', data['id']);

        },
        columns: [
            {data: 'title'},
            {data: 'filename'},
            {data: 'created_at'},
            {data: 'action'},
        ],
        initComplete: function( settings, json )
        {
            var indexColumn = 0;

            this.api().columns().every(function ()
            {
                var column      = this;
                var input       = document.createElement("input");

                $(input).attr( 'placeholder', 'Search' )
                        .addClass('form-control form-control-sm')
                        .appendTo( $('.filterhead:eq('+indexColumn+')').empty() )
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });

                indexColumn++;
            });
        }
    });

    $(document).on('submit', '#personal-details-form', function(){

        event.preventDefault();

        Swal.fire({
            title: 'Wait',
            text: "Are you sure you want to submit?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#02a8b5',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                $.post(url+'/addUserInfo/'+pathname[5], $(this).serialize())
                    .done(function(data){

                        data = JSON.parse(data);

                        if(!data.error){

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: data.success_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                        else{

                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: 'No updates!',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })
                    .fail(function(xhr, textStatus, errorThrown){


                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Request '+errorThrown,
                            showConfirmButton: false,
                            timer: 2000
                        });
                });
            }
        })

    });

    $(document).on('submit', '#family-details-form', function(){

        event.preventDefault();

        Swal.fire({
            title: 'Wait',
            text: "Are you sure you want to submit?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#02a8b5',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                $.post(url+'/addFamilyInfo/'+pathname[5], $(this).serialize())
                    .done(function(data){

                        data = JSON.parse(data);

                        if(!data.error){

                            if(data.child_list){
                                $('#child-update-status').append(
                                    '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        'Child List Updated!'+
                                    '</div>'
                                );
                            }

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: data.success_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                        else{

                            if(data.child_list){
                                $('#child-update-status').append(
                                    '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        'Child List Updated!'+
                                    '</div>'
                                );

                            }

                            if(data.child_list == false && data.error == true)
                            {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: data.error_message,
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            }

                        }
                    })
                    .fail(function(xhr, textStatus, errorThrown){

                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Request '+errorThrown,
                            showConfirmButton: false,
                            timer: 2000
                        });
                });
            }
        })

    });

    $(document).on('submit', '#education-details-form', function(){

        event.preventDefault();

        Swal.fire({
            title: 'Wait',
            text: "Are you sure you want to submit you education info?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#02a8b5',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                $.post(url+'/addEducationInfo/'+pathname[5], $(this).serialize())
                    .done(function(data){

                        data = JSON.parse(data);

                        if(!data.error){

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: data.success_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                        else{
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: data.error_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })
                    .fail(function(xhr, textStatus, errorThrown){

                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Request '+errorThrown,
                            showConfirmButton: false,
                            timer: 2000
                        });
                });
            }
        })
    });

    $(document).on('submit', '#career-details-form', function(){

        event.preventDefault();

        Swal.fire({
            title: 'Wait',
            text: "Are you sure you want to submit you career info?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#02a8b5',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                $.post(url+'/addCareerInfo/'+pathname[5], $(this).serialize())
                    .done(function(data){

                        data = JSON.parse(data);

                        if(!data.error){

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: data.success_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                        else{
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: data.error_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })
                    .fail(function(xhr, textStatus, errorThrown){

                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Request '+errorThrown,
                            showConfirmButton: false,
                            timer: 2000
                        });
                });
            }
        })
    });

    $(document).on('submit', '#travel-details-form', function(){

        event.preventDefault();

        Swal.fire({
            title: 'Wait',
            text: "Are you sure you want to submit you travel info?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#02a8b5',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                $.post(url+'/addTravelInfo/'+pathname[5], $(this).serialize())
                    .done(function(data){

                        data = JSON.parse(data);

                        if(!data.error){

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: data.success_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                        else{
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: data.error_message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })
                    .fail(function(xhr, textStatus, errorThrown){

                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Request '+errorThrown,
                            showConfirmButton: false,
                            timer: 2000
                        });
                });
            }
        })
    });


    $(document).on('click', '#add-child', function(){

        $('#child-table').append(
            '<tr>'+
                '<td>'+
                    '<input type="hidden" name = "child_id[]">'+
                    '<input type="text" class = "form-control" name = "name_of_children[]" required>'+
                '</td>'+
                '<td>'+
                    '<select name="child_status[]"  class = "form-control" required>'+
                        '<option value="" selected disabled>Select Status</option>'+
                        '<option value="employed">Employed</option>'+
                        '<option value="student">Student</option>'+
                    '</select>'+
                '</td>'+
                '<td>'+
                    '<input type="date" class = "form-control" name = "birthday_of_children[]" required>'+
                '</td>'+
                '<td>'+
                    '<button type = "button" class = "btn btn-outline-primary btn-xs remove-child"><span class = "ri-close-line"></span></button>'+
                '</td>'+
            '</tr>'
        );
    });


    $(document).on('click', '.remove-child', function(){
        $(this).parent().parent().remove();
    });

    $(document).on('click', '#add-country', function(){
        $('#country-table').append(
            '<tr>'+
                '<td>'+
                    '<input type="hidden" class="form-control" name="travel_id[]">'+
                    '<input type="text" name = "country[]" class="form-control" id="country" placeholder="Enter Country">'+
                '</td>'+
                '<td>'+
                    '<input type="text" name = "travel_purpose[]" class="form-control" id="travel_purpose" placeholder="Enter Purpose">'+
                '</td>'+
                '<td>'+
                    '<input type="text" name = "month_year[]" class="form-control" id="month_year" placeholder="Enter Month - Year">'+
                '</td>'+
                '<td>'+
                    '<button type = "button" id = "remove-travel-history" class = "btn btn-outline-primary btn-sm"><span class = "ri-close-line"></span></button>'+
                '</td>'+
            '</tr>'
        );
    });

    $(document).on('click', '#remove-travel-history', function(){
        $(this).parent().parent().remove();
    });

    $('#birthdate').on('blur', function(){

        var age = getAge($(this).val());
        $('#age').val(age);

    });

    function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }

});
$(document).ready(function() { 
//    $('#btnRegister').click(function() {
//        if($('#signRegPassword').val()!=$('#signRegConfirmPassword').val()){
//            $('#signRegPassword').css('background-color','red');
//            $('#signRegConfirmPassword').css('background-color','red');
//            alert("please confirm password");
//            return;
//        }
//        if(!$('#signRegUsername').val()) return;
//        if(!$('#signRegEmail').val()) return;
//        if(!$('#signRegMobileNumber').val()) return;
//        if(!$('#signRegPassword').val()) return;
//        if(!$('#signRegConfirmPassword').val()) return;
//         var data = {
//             signUsername: $('#signRegUsername').val(),
//             signEmail: $('#signRegEmail').val(),
//             signMobileNumber: $('#signRegMobileNumber').val(),
//             signPassword: $('#signRegPassword').val(),
//             admin:'0'
//         }
//         console.log(data);
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax({
//             url: "http://localhost:8000/handlelogin",
//             method: "POST", 
//             data: data,
//             dataType: "json",
//             success: function(resp) {
//                 if (resp.status == "success"){  
//                     alert("success")
//                     location.reload();
//                 }else{
//                     alert("You are not available")
//                 }
//             },
//             error: function(xhr, status, errorThrown) {
//                 alert('Please insert data');
//             }
//         });
//     });
    $('#btnNewRegister').click(function() {
       if($('#signPassword').val()!=$('#signConfirmPassword').val()){
           $('#signPassword').css('background-color','red');
           $('#signConfirmPassword').css('background-color','red');
           alert("please confirm password");
           return;
       }
        if(!$('#signUsername').val()){
            $('#signUsername').css('border-color','red');
            return;
        }else{
            $('#signUsername').css('border-color','#1ab394');
        } 
       if(!$('#signEmail').val()){
           $('#signEmail').css('border-color','red');
            return;
       }else{
            $('#signEmail').css('border-color','#1ab394');
        } 
       if(!$('#signMobileNumber').val()){
           $('#signMobileNumber').css('border-color','red');
           return;
       } 
       else{
            $('#signMobileNumber').css('border-color','#1ab394');
        } 
       if(!$('#signPassword').val()){
           $('#signPassword').css('border-color','red');
           return;
       } else{
            $('#signPassword').css('border-color','#1ab394');
        } 
       if(!$('#signConfirmPassword').val()){
           $('#signConfirmPassword').css('border-color','red');
           return;
       }else{
            $('#signConfirmPassword').css('border-color','#1ab394');
        } 
        var data = {
            signUsername: $('#signUsername').val(),
            signEmail: $('#signEmail').val(),
            signMobileNumber: $('#signMobileNumber').val(),
            signPassword: $('#signPassword').val(),
            admin:'1'
        }
        console.log(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "http://localhost:8000/users",
            method: "POST", 
            data: data,
            dataType: "json",
            success: function(resp) {
                console.log(resp);
                if (resp.status == "success")
                    alert("success")
                    location.reload();
            },
            error: function(xhr, status, errorThrown) {
                console.log(xhr)
                alert('Email Address Already in Use');
            }
        });
    });
    $('#users_table').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');}
                }
            ]
    });
    $('.eDelete').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).parents('tr').attr('id');
        $.ajax({
            url: "users",
            method: "DELETE",
            dataType: "json",
            data: { id: id },
            success: function(resp) {
                if (resp.status == "success")
                    alert('Data was deleted');
                    location.reload();
            },
            error: function(xhr, status, errorThrown) {
                alert('Connection failure');
            }
        });
    });
        $('.eEdit').click(function(){
            $('#idHidden').val($(this).parents('tr').attr('id'));
            $('#signEditUsername').val($(this).parents('tr').find('td').eq(1).text());
            $('#signEditEmail').val($(this).parents('tr').find('td').eq(2).text());
            $('#signEditMobileNumber').val($(this).parents('tr').find('td').eq(3).text());
    })
    
    $('#btnEditRegister').click(function() {
        var data = {
            signUsername: $('#signEditUsername').val(),
            signEmail: $('#signEditEmail').val(),
            signMobileNumber: $('#signEditMobileNumber').val(),
            id: $('#idHidden').val(),
        }
        if(!$('#signEditUsername').val()){
            $('#signEditUsername').css('border-color','red');
            return;
        }else{
            $('#signEditUsername').css('border-color','#1ab394');
        } 
       if(!$('#signEditEmail').val()){
           $('#signEditEmail').css('border-color','red');
            return;
       }else{
            $('#signEditEmail').css('border-color','#1ab394');
        } 
       if(!$('#signEditMobileNumber').val()){
           $('#signEditMobileNumber').css('border-color','red');
           return;
       } 
       else{
            $('#signEditMobileNumber').css('border-color','#1ab394');
        } 
        console.log(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "http://localhost:8000/users/update",
            method: "PUT", 
            data: data,
            dataType: "json",
            success: function(resp) {
                console.log(resp);
                if (resp.status == "success")
                    alert("success")
                    location.reload();
            },
            error: function(xhr, status, errorThrown) {
                console.log(xhr)
                alert('Email Address Already in Use');
            }
        });
    });
})
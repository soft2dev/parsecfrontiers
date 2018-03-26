$(document).ready(function() {
    $('#signRegConfirmPassword').on('keyup', function () {
    if ($('#signRegPassword').val() == $('#signRegConfirmPassword').val()) {
        $('.message').html('Matching').css('color', 'green');
    } else 
        $('.message').html('Not Matching').css('color', 'red');
});   
// $.validator.setDefaults({
//     debug: true,
//     success: "valid"
// });
// $( "#camForm" ).validate({
//   rules: {
//     field: {
//       required: true,
//       minlength: 3
//     }
//   }
// });
//    $('#btn_apply').click(function() {
//        if(!$('#txt_wallet_address').val()) return;
//        if(!$('#txt_twitter_account').val()) return;
//        if(!$('#txt_telegram_name').val()) return;
//        if(!$('#txt_pre_telegram_name').val()) return;
//         var data = {
//             walletAddress: $('#txt_wallet_address').val(),
//             twitterAccount: $('#txt_twitter_account').val(),
//             telegramName: $('#txt_telegram_name').val(),
//             preTelegramName: $('#txt_pre_telegram_name').val(),
//         }
        
//         $("#camForm").ajaxSubmit({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax({
//             url: "/handleregisters",
//             method: "POST", 
//             data: data,
//             dataType: "json",
//             success: function(resp) {
//                 if (resp.status == "success")
//                     $('.setSection').show();
//                     $('.formWrapper').hide();
//             },
//             error: function(xhr, status, errorThrown) {
//                 alert('Wallet address already in use.');
//             }
//         });
//     });
    $('#btnNewMember').click(function() {
        var data = {
            walletAddress: $('#txt_wallet_address').val(),
            twitterAccount: $('#txt_twitter_account').val(),
            telegramName: $('#txt_telegram_name').val(),
            preTelegramName: $('#txt_pre_telegram_name').val(),
        }
        if(!$('#txt_wallet_address').val()){
            $('#txt_wallet_address').css('border-color','red');
            return;
        }else{
            $('#txt_wallet_address').css('border-color','#1ab394');
        } 
       if(!$('#txt_twitter_account').val()){
           $('#txt_twitter_account').css('border-color','red');
            return;
       }else{
            $('#txt_twitter_account').css('border-color','#1ab394');
        } 
       if(!$('#txt_telegram_name').val()){
           $('#txt_telegram_name').css('border-color','red');
           return;
       } 
       else{
            $('#txt_telegram_name').css('border-color','#1ab394');
        } 
        if(!$('#txt_pre_telegram_name').val()){
           $('#txt_pre_telegram_name').css('border-color','red');
           return;
       } 
       else{
            $('#txt_pre_telegram_name').css('border-color','#1ab394');
        } 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/campaigners",
            method: "POST", 
            data: data,
            dataType: "json",
            success: function(resp) {
                console.log(resp);
                if (resp.status == "success")
                    alert('success');
                    location.reload();
            },
            error: function(xhr, status, errorThrown) {
                console.log(xhr)
                alert('Wallet Address Already in Use');
            }
        });
    });

    $('.dataTables-example').DataTable(
        {
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
                                .css('font-size', 'inherit');
                }
                }
            ]

        }
    );
    $('.mDelete').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).parents('tr').attr('id');
        console.log('id');
        $.ajax({
            url: "/campaigners/destroy",
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
    $('.mEdit').click(function(){
            $('#idHidden').val($(this).parents('tr').attr('id'));
            $('#txt_Edit_wallet_address').val($(this).parents('tr').find('td').eq(1).text());
            $('#txt_Edit_twitter_account').val($(this).parents('tr').find('td').eq(2).text());
            $('#txt_Edit_telegram_name').val($(this).parents('tr').find('td').eq(3).text());
            $('#txt_Edit_pre_telegram_name').val($(this).parents('tr').find('td').eq(3).text());
    })
    
    $('#btnEditMember').click(function() {
        var data = {
            walletAddress: $('#txt_Edit_wallet_address').val(),
            twitterAccount: $('#txt_Edit_twitter_account').val(),
            telegramName: $('#txt_Edit_telegram_name').val(),
            preTelegramName: $('#txt_Edit_pre_telegram_name').val(),
            id: $('#idHidden').val(),
        }
           if(!$('#txt_Edit_wallet_address').val()){
            $('#txt_Edit_wallet_address').css('border-color','red');
            return;
        }else{
            $('#txt_Edit_wallet_address').css('border-color','#1ab394');
        } 
       if(!$('#txt_Edit_twitter_account').val()){
           $('#txt_Edit_twitter_account').css('border-color','red');
            return;
       }else{
            $('#txt_Edit_twitter_account').css('border-color','#1ab394');
        } 
       if(!$('#txt_Edit_telegram_name').val()){
           $('#txt_Edit_telegram_name').css('border-color','red');
           return;
       } 
       else{
            $('#txt_Edit_telegram_name').css('border-color','#1ab394');
        } 
        if(!$('#txt_Edit_pre_telegram_name').val()){
           $('#txt_Edit_pre_telegram_name').css('border-color','red');
           return;
       } 
       else{
            $('#txt_Edit_pre_telegram_name').css('border-color','#1ab394');
        } 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/campaigners/update",
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
                alert('Wallet Address Already in Use');
            }
        });
    });
    var isAddress = function (address) {
    if (!/^(0x)?[0-9a-f]{40}$/i.test(address)) {
        // check if it has the basic requirements of an address
        return false;
    } else if (/^(0x)?[0-9a-f]{40}$/.test(address) || /^(0x)?[0-9A-F]{40}$/.test(address)) {
        // If it's all small caps or all all caps, return true
        return true;
    } else {
        // Otherwise check each case
        return isChecksumAddress(address);
    }
};
var isChecksumAddress = function (address) {
    // Check each case
    address = address.replace('0x','');
    var addressHash = sha3(address.toLowerCase());
    for (var i = 0; i < 40; i++ ) {
        // the nth letter should be uppercase if the nth digit of casemap is 1
        if ((parseInt(addressHash[i], 16) > 7 && address[i].toUpperCase() !== address[i]) || (parseInt(addressHash[i], 16) <= 7 && address[i].toLowerCase() !== address[i])) {
            return false;
        }
    }
    return true;
};
// $('#camForm').validator();
})
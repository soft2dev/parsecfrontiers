$(document).ready(function() {   
   $('#btn_apply').click(function() {
       if(!$('#txt_wallet_address').val()) return;
       if(!$('#txt_twitter_account').val()) return;
       if(!$('#txt_telegram_name').val()) return;
       if(!$('#txt_pre_telegram_name').val()) return;
        var data = {
            walletAddress: $('#txt_wallet_address').val(),
            twitterAccount: $('#txt_twitter_account').val(),
            telegramName: $('#txt_telegram_name').val(),
            preTelegramName: $('#txt_pre_telegram_name').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(data);
        $.ajax({
            url: "campaigners",
            method: "POST", 
            data: data,
            dataType: "json",
            success: function(resp) {
                console.log(resp);
                if (resp.status == "success")
                    $('.setSection').show();
                    $('.formWrapper').hide();
            },
            error: function(xhr, status, errorThrown) {
                console.log(xhr)
                alert('Please Correct data');
            }
        });
    });
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
        console.log(data);
        $.ajax({
            url: "http://localhost:8000/campaigners",
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
        $.ajax({
            url: "campaigners",
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
            url: "http://localhost:8000/campaigners/update",
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
})
require('./bootstrap');

$(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
  });

  //会員情報編集→確認→更新
  $('#mypage-edit').on('click',function() {
    $('input').prop('disabled',false);
    let html = 
    `
    <button type="button" id="cancel"class="btn">キャンセル</button>
    <button type="button" id="confirm" class="btn" data-toggle="modal" data-target="#exampleModal">確認する</button>
    `;
    $(this).parent().append(html);
    $(this).hide();
    
    let email = $('#email').val();
    let last_name = $('#last_name').val();
    let first_name = $('#first_name').val();
    let last_name_kana = $('#last_name_kana').val();
    let first_name_kana = $('#first_name_kana').val();
    let post_code = $('#post_code').val();
    let address = $('#address').val();
    let phone_number = $('#phone_number').val();
    let modal = $('#exampleModal');

    $('#confirm').on('click',function(){
      console.log(last_name);
      modal.find('#modal_email').text(email);
      modal.find('#modal_last_name').text(last_name);
      modal.find('#first_name').text(first_name);
      modal.find('#last_name_kana').text(last_name_kana);
      modal.find('#first_name_kana').text(first_name_kana);
      modal.find('#post_code').text(post_code);
      modal.find('#address').text(address);
      modal.find('#phone_number').text(phone_number);

    /*  $.ajax({
        type: '',
        url: '',
        dataType: '',
        data: {
        },
        cache: false,
      })
      .done(function() {

      })
      .fail(function(data, xhr, err) {
        console.log(err);
        console.log(xhr);
        console.log(data || 'null');
      }); */
    });

    //中止
    $('#cancel').on('click',function() {
      location.reload();
      //$('input').prop('disabled',true);
    });
  });
})
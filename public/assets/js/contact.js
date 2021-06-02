$(document).ready(() => {
    let btn = $('#btn-contact'),
        form = $('.contact_form');

    form.submit((e) => {
        var values = form.serialize();
        e.preventDefault();

        $.ajax({
            method : 'POST',
            url : form.attr('action'),
            data : values,
            beforeSend : function (xhr){
                btn.addClass('disabled');
                btn.text('Loading');
            }
        }).done((msg) => {
            msg = JSON.parse(msg);
            $('#back_msg').text(msg.msg);
            $('.toast').toast('show');

            btn.removeClass('disabled');
            btn.text('Envoyer votre message');

            form.closest('form').find("input, textarea").val("");
        })
    })

})

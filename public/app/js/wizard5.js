$('#w5_takePic').click(function () {
    $('#w5_photo_selfie').click();
});
$('#w5_photo_selfie').change(function (event) {
    doToast('Aguarde, enquanto estamos analisando a sua foto.');
    $('#w5_takePic').css('visibility', 'hidden');
    $('#w5_continuar').css('visibility', 'hidden');
    $('#w5_identidade').css('display', 'none');
    $('#w5_loader').css('display', 'inline-block');

    var form = new FormData();
    form.append('photo_selfie', event.target.files[0]);

    $.ajax({
        url: 'https://resicar.azurewebsites.net/api/contracts/' + contractId + '/photoselfie',
        data: new FormData($('#w5_form')[0]),
        type: "POST",
        processData: false,
        contentType: false,
        headers: {
            'Authorization': 'Bearer ' + token,
            'client_id': clientId,
            'client_secret': clientSecret,
            'Accept': 'application/json',
        },
        statusCode: {
            200: function (response) {
                doToast(response.message);
                completeW5(response);
            },
            422: function (response) {
                response = JSON.parse(JSON.stringify(response));
                var result = JSON.parse(response.responseText);
                doToast(result.message);

                if (result.errors) {
                    for (var i = 0; i < result.errors.length; i++) {
                        doToast(result.errors[i]);
                    }
                }

                completeW5(null);
            },
            500: function (response) {
                doToast('Ops! Ocorreu um erro ao tentar salvar.');
                completeW5(null);
            }
        },
    });
});

function completeW5(result) {
    $('#w5_identidade').css('display', 'inline');
    $('#w5_loader').css('display', 'none');

    if (result != null) {
        $('#w5_identidade').attr('src', result.image_url);
        $('#w5_takePic').css('visibility', 'hidden');
        $('#w5_continuar').css('visibility', 'visible');
    } else {
        $('#w5_takePic').css('visibility', 'visible');
        $('#w5_continuar').css('visibility', 'hidden');
        $('#w5_takePic').html('Tentar novamente');
        $('#w5_photo_identity').val('');
    }
}

$('#w4_takePic').click(function () {
    $('#w4_photo_identity').click();
});
$('#w4_photo_identity').change(function (event) {
    doToast('Aguarde, enquanto estamos analisando o seu documento.');
    $('#w4_takePic').css('visibility', 'hidden');
    $('#w4_continuar').css('visibility', 'hidden');
    $('#w4_identidade').css('display', 'none');
    $('#w4_loader').css('display', 'inline-block');

    var form = new FormData();
    form.append('photo_identity', event.target.files[0]);

    $.ajax({
        url: 'https://resicar.azurewebsites.net/api/contracts/' + contractId + '/photoidentity',
        data: new FormData($('#w4_form')[0]),
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
                completeW4(response);
                setTimeout(function () {
                    window.location = 'hybrid:wizard5?contract=' + contractId;
                }, 3000);
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

                completeW4(null);
            },
            500: function (response) {
                doToast('Ops! Ocorreu um erro ao tentar salvar.');
                completeW4(null);
            }
        },
    });
});

function completeW4(result) {
    $('#w4_identidade').css('display', 'inline');
    $('#w4_loader').css('display', 'none');

    if (result != null) {
        $('#w4_identidade').attr('src', result.image_url);
        $('#w4_takePic').css('visibility', 'hidden');
        $('#w4_continuar').css('visibility', 'visible');
    } else {
        $('#w4_takePic').css('visibility', 'visible');
        $('#w4_continuar').css('visibility', 'hidden');
        $('#w4_takePic').html('Tentar novamente');
        $('#w4_photo_identity').val('');
    }
}

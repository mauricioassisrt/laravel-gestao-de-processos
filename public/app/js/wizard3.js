$('#w3_save').click(function () {
    var code = $('#w3_code').val();

    if (code == '') {
        doToast('Informe o código de um afiliado ou pule esta etapa.');
    }
    else if (code.length <= 3) {
        doToast('O código de afiliado deve ter no mínimo 5 caracteres.');
    }
    else {
        $.ajax({
            type: "POST",
            headers:
            {
                'Authorization': 'Bearer ' + token,
                'client_id': clientId,
                'client_secret': clientSecret,
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            url: 'https://resicar.azurewebsites.net/api/contracts/' + contractId + '/filiate',
            data: JSON.stringify({ 'filiate_code': code }),
            statusCode:
            {
                200: function (response) {
                    doToast('Parabéns! Código aplicado com sucesso!');
                    setTimeout(function () {
                        window.location = 'hybrid:wizard4?contract=' + contractId;
                    }, 3000);
                },
                422: function (response) {
                    $('#w3_code').val('');
                    doToast('Código de afiliado inválido!');
                },
                500: function (response) {
                    doToast('Ops! Ocorreu um erro ao tentar salvar.');
                }
            },
            success: function (data) {

            },
            dataType: 'application/json'
        });
    }
});

$('#w3_jump').click(function () {
    window.location = 'hybrid:wizard4?contract=' + contractId;
});

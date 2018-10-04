/**
 * @author Dimas Sulz <dimassulz@gmail.com>
 * @description Essa fun��o retorna os municipios para os <options> de um <select> de acordo com uma uf informada
 *
 * @param selector O id, class ou tag do seletor que receber� os dados (<select>)
 * @exampleToSelector '#CO_MUNICIPIO_IBGE'
 *
 * @param settings S�o as configura��es do plugin (colocar essas configura��es do segundo parametro entre chaves e separado por v�rgula)
 * @exampleToSettings { uf:$('#CO_UF_IBGE').val(), url: "json/carregarMunicipios.php", async:false}
 *
 * @returns ajax { json }| xml | html
 * @todo N�o implementado para XML e HTML, futuramente implementar
 *
 * @exampleUtilizacaoGeral
 * $('#CO_UF_IBGE').carregarMunicipios('#CO_MUNICIPIO_IBGE',{ uf:$('#CO_UF_IBGE').val(), url: "json/carregarMunicipios.php"});
 *
 * @see Ver pasta js sismob, e pasta json sismob (neles voc� ver� a utiliza��o)
 */
jQuery.fn.carregarCombos = function (selector, settings) {
    var config = {
        method: "GET",
        url: "",
        type: "json",
        codSelected: "",
        all: false,
        async: true,
        otherParams: "",
        global: true,
        codNotFound: "",
        novaEquipe: false,
        msgNotFound: "Selecione a opção anterior anterior!",
        msgError: "Ocorreu um problema ao consultar, tente novamente!",
        msgSelect: "- SELECIONE -"
    }

    if (settings) {
        $.extend(config, settings);
    }
    $(selector).html('<option value="">' + config.msgSelect + '</option>');
    $.ajax({
        type: config.method,
        url: config.url + '/' + config.otherParams,
        dataType: config.type,
        async: config.async,
        global: config.global,
        beforeSend: function () {
            $(selector).html('<option value="">Carregando...</option>');
        },
        success: function (result) {
            // console.debug(result);
            $(selector).html('<option value="">' + config.msgSelect + '</option>');
            if (result == false) {
                $(selector).html('<option value="' + config.codNotFound + '">- ' + config.msgNotFound + ' -</option>');
            } else {
                options = '';
                $.each(result, function (cod, val) {
                    if (cod == config.codSelected) {
                        if (cod == '') {
                            $(selector).html('<option value="' + config.codNotFound + '">- ' + config.msgNotFound + ' -</option>');
                        } else {
                            options += '<option value="' + cod + '" selected="selected">' + val + '</option>';
//							$(selector).append('<option value="'+cod+'" selected="selected">'+val+'</option>');
                        }
                    } else if (cod == '') {
                        $(selector).html('<option value="' + config.codNotFound + '">- ' + config.msgNotFound + ' -</option>');
                    } else {
                        options += '<option value="' + String(cod) + '">' + val + '</option>';
//                        $(selector).append('<option value="'+String(cod)+'">'+val+'</option>')
                    }
                });
                if (config.novaEquipe) {
                    if (config.novaEquipe == true && config.codNotFound == config.codSelected) {
                        options += '<option value="' + config.codNotFound + '" selected="selected">' + config.msgNotFound + '</option>';
                    } else {
                        options += '<option value="' + config.codNotFound + '">' + config.msgNotFound + '</option>';
                    }
                }
                $(selector).append(options);
            }
        },
        error: function () {
            $(selector).html('<option value="">- ' + config.msgError + ' -</option>');
        }
    });
}
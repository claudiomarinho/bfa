/**
 * Created by dimas.filho on 03/03/2016.
 */
var MSG_S001 = "Dados salvo com sucesso!";
var MSG_S001_1 = "%s salvo com sucesso!";
var MSG_S002 = "Dados excluídos com sucesso!";
var MSG_A001 = "Deseja excluir o %s?";
var MSG_A001_1 = "Deseja excluir a %s?";
var MSG_A002 = "%s excluído com sucesso!";
var MSG_A002_1 = "%s excluída com sucesso!";
var MSG_A003 = "Deseja limpar o %s?";
var MSG_A003_1 = "Deseja limpar a %s?";
var MSG_A004 = 'Seu tempo de acesso está acabando, faltam exatamente <strong id="sessao"></strong> para o sistema encerrar. Clique em Sim para renovar o acesso.';
var MSG_A004_1 = 'O tempo de acesso acabou! <br> Você será redirecionado para a tela de login do E-Gestor AB.';
var MSG_A005 = 'Insira ao menos 1 (um) Eas visível!';
var MSG_A006 = "Campos obrigatórios não preenchidos!";
var MSG_A007 = "Dados antropométricos fora dos limites estabelecidos para a idade!";
var MSG_A008 = "Está ciente que a beneficiária esteve gestante na atual vigência?";
var MSG_A009 = "Está ciente que a beneficiária não esteve gestante na atual vigência?";
var MSG_A010 = "Deseja salvar o acompanhamento?";
var MSG_A011 = "Essa gestante é maior de 45 anos. Está ciente que a beneficiária esteve gestante na atual vigência?";
var MSG_A012 = "Essa gestante é menor de 14 anos. Está ciente que a beneficiária esteve gestante na atual vigência?";
var MSG_E001 = "Ocorreu um erro ao salvar! Tente novamente mais tarde!";
var MSG_E002 = "Sua sessão expirou, você deve efetuar o login novamente, para acessar o sistema!";
var MSG_E003 = "Você não tem permissão para acessar essa funcionalidade!";
var MSG_E004 = "Ocorreu um erro ao excluir! Tente novamente mais tarde!";
var MSG_E005 = "Ocorreu um erro ao consultar os dados! <br> %s";
var MSG_E005_1 = "Ocorreu um erro ao consultar as informações!";

//NOVAS ALERTAS
var MSG_A00= "O profissional responsável pelo atendimento não foi informado, O não preenchimento dessa informação poderá impactar nos indicadores do PMAQ, Deseja mesmo assim salvar esse acompanhamento?";
var MSG_A00= "Você será obrigado a informar os dados de peso e altura!";
var MSG_A00= "Deseja víncular TODAS as famílias no EAS: XXXXXX ? Obs.: Dependendo do número de famílias esse processo pode levar alguns minutos!";
var MSG_A00= "Deseja desvíncular TODAS as famílias dos EAS? Obs.: Dependendo do número de famílias esse processo pode levar alguns minutos!";
var MSG_A00= "Aguarde, executando a ação... Esse processo pode levar alguns minutos!";
var MSG_A00= "Aguarde, executando a consulta... Esse processo pode levar alguns minutos!";
var MSG_A00= "Selecione o bairro!";
var MSG_A00= "Digite o número do NIS, deve conter 11 digitos!";
var MSG_A00= "Ocorreu um erro na vinculação!";
var MSG_A00= "Ocorreu um erro na desvinculação!";
var MSG_A00= "Selecione um EAS para vincular!";
var MSG_A00= "Digite para inserir um NOVO GRUPO ou selecione um nome para o(s) bairro(s)!";
var MSG_A00= "Selecione os bairros para agrupar!";
var MSG_A00= "A vigência ainda não foi iniciada!";

//NOVAS SUCESSO
var MSG_S00= "Todas as famílias vínculadas com sucesso!";

//NOVAS ERRO
var MSG_E00= "Código familiar não encontrado!";
var MSG_E00= "Ocorreu um erro ao vincular famílias!";
var MSG_E00= "Nenhum registro encontrado!";
var MSG_E00= "Código do mapa inválido ou sem registros!";

msg = function (cod, complementoMsg) {
    let mensagem = eval("MSG_" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};

msgSucesso = function (cod, complementoMsg) {
    let mensagem =  eval("MSG_S" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};

msgAlerta = function (cod, complementoMsg) {
    let mensagem = eval("MSG_A" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};

msgErro = function (cod, complementoMsg) {
    let mensagem = eval("MSG_E" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};
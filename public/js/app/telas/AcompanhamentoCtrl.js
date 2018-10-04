appPrincipal.controller('AcompanhamentoCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$rootScope',
        ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $rootScope) => {
            $scope.allowClear = true;
            $scope.init = (coFamilia, coPessoa, coMapa) => {
                $scope.progress = $rootScope.progress;
                $scope.acompanhamento = [];
                $scope.profissionais = [];
                $scope.motivosNaoAcomp = [];
                $scope.easVisiveis = [];
                $scope.motivoVacinas = [];
                $scope.motivoPreNatal = [];
                $scope.motivoAvaliacao = [];
                $scope.listaDsei = [];
                $scope.formAcomp = [];
                $scope.formAcomp.coFamilia = coFamilia;
                $scope.formAcomp.coPessoa = coPessoa;
                $scope.NU_PESO = {
                    value: 0,
                    options: {
                        floor: 0,
                        ceil: 199,
                        step: 0.1,
                        precision: 1,
                        disabled: false,
                        translate: (value) => {
                            return '<small>' + value + '</small> kg'
                        }
                    },
                };

                $scope.NU_ALTURA = {
                    value: 0,
                    options: {
                        floor: 0,
                        ceil: 250,
                        step: 0.1,
                        precision: 1,
                        disabled: false,
                        translate: (value) => {
                            return '<small>' + value + '</small> cm'
                        }
                    },
                };
                $scope.consultaAcomp(coPessoa, coMapa);
                $scope.consultarListaMotivosNaoAcomp();
                $scope.consultarListaEasVisiveis();
                $scope.consultarListaMotivosDescumprimentoVac();
                $scope.consultarListaMotivosDescumprimentoGes();
                $scope.consultarListaMotivosDescumprimento();
                $scope.consultaDsei();
                $scope.consultaMunicipioAcomp(coPessoa);

                $scope.showCampoDUM = false;
            };

            $scope.disabledInfoNutri = () => {
                if (!$scope.infoNutricionais) {
                    bootbox.alert('Você será obrigado a informar os dados de peso e altura!');
                    $scope.formAcomp.NU_ALTURA = parseFloat($scope.formAcomp.LIMITES.NU_ALTURA_MINIMA.replace(',', '.'));
                    $scope.formAcomp.NU_PESO = parseFloat($scope.formAcomp.LIMITES.NU_PESO_MINIMO.replace(',', '.'));
                } else {
                    $scope.formAcomp.NU_ALTURA = 0;
                    $scope.formAcomp.NU_PESO = 0;
                }
                $scope.NU_PESO.options.disabled = $scope.infoNutricionais;
                $scope.NU_ALTURA.options.disabled = $scope.infoNutricionais;
            };

            $scope.consultarLimites = (idadeDias) => {
                $scope.progress = true;
                HttpService.search('acompanhamento/consultaLimites/' + idadeDias, 'GET').then((res) => {
                    $scope.formAcomp.LIMITES = res;
                    $scope.progress = false;
                    $scope.NU_PESO.options.floor = parseFloat($scope.formAcomp.LIMITES.NU_PESO_MINIMO.replace(',', '.'));
                    $scope.NU_PESO.options.ceil = parseFloat($scope.formAcomp.LIMITES.NU_PESO_MAXIMO.replace(',', '.'));
                    $scope.NU_ALTURA.options.floor = parseFloat($scope.formAcomp.LIMITES.NU_ALTURA_MINIMA.replace(',', '.'));
                    $scope.NU_ALTURA.options.ceil = parseFloat($scope.formAcomp.LIMITES.NU_ALTURA_MAXIMA.replace(',', '.'));

                    if ($scope.formAcomp.DT_ACOMPANHAMENTO) {
                        $scope.dtMinDumJs = $scope.retornarLimiteDatasDum().dtMin;
                        $scope.dtMaxDumJs = $scope.retornarLimiteDatasDum().dtMax;
                        if ($scope.formAcomp.DT_ULTIMA_MENSTRUACAO) {
                            if (retornaDataJs($scope.formAcomp.DT_ACOMPANHAMENTO).getTime() < retornaDataJs($scope.formAcomp.DT_ULTIMA_MENSTRUACAO).getTime()) {
                                $scope.formAcomp.DT_ULTIMA_MENSTRUACAO = $scope.formAcomp.DT_ACOMPANHAMENTO;
                            }
                        }
                    }
                    $scope.showCampoDUM = true;
                });
            };

            $scope.retornarLimiteDatasDum = () => {
                let dtMin = retornaDataJs($scope.formAcomp.DT_ACOMPANHAMENTO);
                /*
                 Como é praticamente impossível definir o dia exato em que o óvulo é fecundado, convencionou-se datar a gravidez a partir do 1º dia do último período menstrual. Se contarmos a idade desta forma, a duração da gravidez é de 280 dias, ou 40 semanas
                */
                dtMin.setDate(dtMin.getDate() - (250));//Calculo data dum
                let dia = dtMin.getDate();
                let mes = dtMin.getMonth();
                if (dtMin.getDate() < 10) {
                    dia = '0' + dtMin.getDate();
                }
                if (dtMin.getMonth() < 10) {
                    mes = '0' + dtMin.getMonth();
                }
                return {dtMin: dia + '/' + mes + '/' + dtMin.getFullYear(), dtMax: $scope.formAcomp.DT_ACOMPANHAMENTO}
            };

            $scope.consultarIdadeDias = (dataAcomp, coSeq) => {
                HttpService.search('acompanhamento/consultaIdadeDias/' + dataAcomp + '/' + coSeq, 'GET').then((res) => {
                    $scope.formAcomp.IDADE_DIAS = res;
                    if ($scope.formAcomp.IDADE_DIAS) {
                        $scope.consultarLimites($scope.formAcomp['IDADE_DIAS']);
                    }
                });
            };

            $scope.consultaAcomp = (coSeq, coMapa) => {
                HttpService.search('acompanhamento/consultaAcompanhamento/' + coSeq, 'GET').then((res) => {
                    $scope.formAcomp = res;
                    $scope.formAcomp.CO_MAPA = coMapa;
                    if ($scope.formAcomp) {
                        $scope.consultarProfissionais($scope.formAcomp['CO_CNES_ATENDIMENTO']);
                        $scope.consultarLimites($scope.formAcomp['IDADE_DIAS']);
                        $scope.liberaAcomp('S');
                    }
                    // console.log($scope.formAcomp);
                    $scope.formAcomp.MOSTRA_EAS = 'S';
                    if ($scope.formAcomp.ST_RESIDE_INDIGENA === '1') {
                        $scope.formAcomp.MOSTRA_EAS = 'N';
                    }
                    if ($scope.formAcomp.TP_PESSOA === '4') {
                        $scope.infoNutricionais = false;
                    }
                });
            };

            $scope.consultarListaMotivosNaoAcomp = () => {
                HttpService.search('acompanhamento/consultaMotivosNaoAcomp', 'GET').then((res) => {
                    $scope.motivosNaoAcomp = res;
                });
            };

            $scope.consultarListaEasVisiveis = () => {
                $scope.progress = true;
                HttpService.search('acompanhamento/consultaEasVisiveis', 'GET').then((res) => {
                    $scope.progress = false;
                    $scope.easVisiveis = res;
                });
            };

            $scope.consultarProfissionais = (cnes) => {
                $scope.progress = true;
                HttpService
                    .search('acompanhamento/consultaProfissionaisEasVisiveis/' + cnes, 'GET')
                    .then((result) => {
                        $scope.progress = false;
                        if (result) {
                            $scope.profissionais = result;
                        }
                    });
            };

            $scope.consultarListaMotivosDescumprimentoVac = () => {
                HttpService.search('acompanhamento/consultaMotivosDescrumprimento/VACINA', 'GET').then((res) => {
                    $scope.motivoVacinas = res;
                });
            };

            $scope.consultarListaMotivosDescumprimentoGes = () => {
                HttpService.search('acompanhamento/consultaMotivosDescrumprimento/GESTANTE', 'GET').then((res) => {
                    $scope.motivoPreNatal = res;
                });
            };

            $scope.consultarListaMotivosDescumprimento = () => {
                HttpService.search('acompanhamento/consultaMotivosDescrumprimento/MEDIDAS', 'GET').then((res) => {
                    $scope.motivoAvaliacao = res;
                });
            };

            $scope.consultaDsei = () => {
                HttpService.search('acompanhamento/consultaEstabelecimentoDsei', 'GET').then((res) => {
                    $scope.listaDsei = res;
                });
            };

            $scope.consultaMunicipioAcomp = (coPessoa) => {
                HttpService.search('acompanhamento/consultarMunicipioAcomp/' + coPessoa, 'GET').then((res) => {
                    $scope.formAcomp.CO_MUNICIPIO_ACOMP = res;
                    if ($scope.formAcomp.CO_MUNICIPIO_ACOMP === 'N') {
                        $scope.formAcomp.MOSTRA_EAS = 'N';
                    }
                });
            };

            $scope.liberaAcomp = (stGest) => {
                console.log($scope.formAcomp);
                if (stGest === 'N') {
                    $scope.formAcomp.ST_SISTEMA = 'S';
                } else {
                    if ($scope.formAcomp.CO_SISTEMA_ORIGEM_ACOMP === '5' || $scope.formAcomp.CO_SISTEMA_ORIGEM_ACOMP === '4') {
                        $scope.formAcomp.ST_SISTEMA = 'N';
                    } else {
                        $scope.formAcomp.ST_SISTEMA = 'S';
                    }
                }
            };

            $scope.verificaGestante = () => {
                if ($scope.formAcomp.ST_GESTANTE === 'S') {
                    if ($scope.formAcomp['IDADE_DIAS'] > 16425) {
                        bootbox.alert(MSG_A011);
                    } else if ($scope.formAcomp['IDADE_DIAS'] < 5110) {
                        bootbox.alert(MSG_A012);
                    } else {
                        bootbox.alert(MSG_A008);
                    }
                } else {
                    bootbox.alert(MSG_A009);
                }
            };

            //INICIO DA VALIDAÇÃO DO FORMULÁRIO #############################################################

            $scope.isValidForm = () => {
                $scope.msgError = '';
                $scope.msgAlert = '';
                if ($scope.formAcomp.ST_ACOMPANHADO === 'N') {
                    let validAcompanhado = ($scope.formAcomp.CO_BFA_MOTIVO_NAO_ACOMP !== '' && $scope.formAcomp.CO_BFA_MOTIVO_NAO_ACOMP !== null);
                    if (!validAcompanhado) {
                        $scope.msgError += '<strong>[Motivo / Ocorrência] </strong>Campo obrigatório!<br>';
                    }
                    return validAcompanhado;
                }
                if ($scope.formAcomp.ST_ACOMPANHADO === 'S') {
                    let validEas = $scope.isValidEas();
                    let validIdigena = $scope.isValidIndigena();
                    let validPessoa;
                    if ($scope.formAcomp.TP_PESSOA === '3') {
                        validPessoa = $scope.isValidCrianca();
                    } else {
                        validPessoa = $scope.isValidMulher();
                    }
                    return (validEas && validIdigena && validPessoa);
                }
            };

            $scope.isValidEas = () => {
                if ($scope.formAcomp.MOSTRA_EAS == 'S') {
                    let valid = ($scope.formAcomp.CO_CNES_ATENDIMENTO !== '' && $scope.formAcomp.CO_CNES_ATENDIMENTO !== null);
                    if (!valid) {
                        $scope.msgError += '<strong>[Estabelecimento (EAS)] </strong> Campo obrigatório!<br>';
                    }
                    if (!$scope.formAcomp.CO_CNS_PROFISSIONAL) {
                        $scope.msgAlert += '<strong>O profissional responsável pelo atendimento não foi informado</strong>' +
                            '<br>' +
                            'O não preenchimento dessa informação poderá impactar nos indicadores do PMAQ, Deseja mesmo assim salvar esse acompanhamento?<br>';
                    }
                    return valid;
                } else {
                    return true;
                }
            };

            $scope.isValidCrianca = () => {
                let resultNutri = true;
                let resultMot = true;
                let resultVac = true;
                if ($scope.formAcomp.ST_MEDIDAS !== 'N') {
                    resultNutri = ($scope.formAcomp.NU_PESO !== 0 && $scope.formAcomp.NU_ALTURA !== 0);
                    if (!resultNutri) {
                        $scope.msgError += '<strong>[Peso/Altura] </strong> Campo obrigatório!<br>';
                    }
                } else {
                    resultMot = ($scope.formAcomp.CO_BFA_MOTIVO_NUTRI_CRIANCA !== '' && $scope.formAcomp.CO_BFA_MOTIVO_NUTRI_CRIANCA !== null);
                    if (!resultMot) {
                        $scope.msgError += '<strong>[Informação Nutricional - Motivo/Ocorrência] </strong> Campo obrigatório!<br>';
                    }
                }
                if ($scope.formAcomp.ST_VACINACAO === 'S') {
                    resultVac = true;
                } else {
                    resultVac = ($scope.formAcomp.CO_BFA_MOTIVO_VACINACAO !== '' && $scope.formAcomp.CO_BFA_MOTIVO_VACINACAO !== null);
                    if (!resultVac) {
                        $scope.msgError += '<strong>[Informação da Criança - Motivo/Ocorrência] </strong> Campo obrigatório!<br>';
                    }
                }
                return (resultNutri && resultMot && resultVac);
            };

            $scope.isValidMulher = () => {
                let resultDum = true;
                let resultGestante = true;
                let resultNutri = true;
                if (!$scope.infoNutricionais) {
                    resultNutri = ($scope.formAcomp.NU_PESO !== parseFloat($scope.formAcomp.LIMITES.NU_PESO_MINIMO.replace(',', '.')) && ($scope.formAcomp.NU_PESO !== 0) && ($scope.formAcomp.NU_ALTURA !== parseFloat($scope.formAcomp.LIMITES.NU_ALTURA_MINIMA.replace(',', '.')))) && ($scope.formAcomp.NU_ALTURA !== 0);
                    if (!resultNutri) {
                        $scope.msgError += '<strong>[Informações Nutricionais - Peso/Altura] </strong> Campo obrigatório!<br>';
                    }
                }
                if ($scope.formAcomp.ST_GESTANTE === 'N') {
                    resultGestante = true;
                } else {
                    resultGestante = ($scope.formAcomp.ST_GESTANTE !== '' && $scope.formAcomp.ST_GESTANTE !== null);
                    if (!resultGestante) {
                        $scope.msgError += '<strong>[Informação da Mulher - É gestante?] </strong> Campo obrigatório!<br>';
                    } else {
                        resultDum = ($scope.formAcomp.DT_ULTIMA_MENSTRUACAO !== null);
                        if (!resultDum) {
                            $scope.msgError += '<strong>[Informação da Mulher - DUM] </strong> Campo obrigatório!<br>';
                        }

                        if ($scope.formAcomp.ST_PRE_NATAL === 'S') {
                            resultGestante = true;
                        } else {
                            if ($scope.formAcomp.ST_PRE_NATAL === 'I') {
                                $scope.msgError += '<strong>[Informação da Mulher - Acesso ao pré natal] </strong> Campo obrigatório!<br>';
                                resultGestante = false;
                            } else {
                                resultGestante = ($scope.formAcomp.CO_BFA_MOTIVO_PRE_NATAL !== '' && $scope.formAcomp.CO_BFA_MOTIVO_PRE_NATAL !== null);
                                if (!resultGestante) {
                                    $scope.msgError += '<strong>[Informação da Mulher - Motivo / Ocorrência] </strong> Campo obrigatório!<br>';
                                }
                            }
                        }
                    }
                }
                return (resultGestante && resultDum && resultNutri);
            };

            $scope.isValidIndigena = () => {
                let result = true;
                if ($scope.formAcomp.ST_RESIDE_INDIGENA === '1') {
                    result = ($scope.formAcomp.CO_DSEI !== '' && $scope.formAcomp.CO_DSEI !== null);
                    if (!result) {
                        $scope.msgError += '<strong>[DSEI] </strong> Campo obrigatório!<br>';
                    }
                }
                return result;
            };

            $scope.salvar = (isValid) => {

                if ($scope.isValidForm()) {
                    let msg = ($scope.msgAlert === '') ? MSG_A010 : $scope.msgAlert;
                    appPrincipal.bootboxConfirmSemOpcaoFechar(msg, undefined, cfpLoadingBar, $scope, function (confirm) {
                        if (confirm) {
                            if (isValid) {
                                let path;
                                if ($scope.formAcomp.CO_MAPA === 0) {
                                    path = 'acompanhamento/familiar/' + $scope.formAcomp['CO_BFA_FAMILIA'];
                                } else {
                                    path = 'mapaacompanhamento/acompanhamento/' + $scope.formAcomp['CO_MAPA'];
                                }
                                $scope.progress = true;
                                HttpService.insert('acompanhamento/salvar', $scope.formAcomp).then((res) => {
                                    if (res.status) {
                                        appPrincipal.bootboxAlertSemOpcaoFecharRedirecionamento(MSG_S001, URL + path);
                                    }
                                });
                            }
                        }
                    });
                } else {
                    appPrincipal.bootboxAlertSemOpcaoFechar($scope.msgError, undefined, cfpLoadingBar);
                }
            };
            $scope.voltar = () => {
                window.location.href = URL + 'acompanhamento/familiar/' + $scope.formAcomp['CO_BFA_FAMILIA'];
            };
        }
    ]
);
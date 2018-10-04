appPrincipal.controller('BairroCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$filter', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $filter, $window) {
            $scope.allowClear = true;
            $scope.init = (coMunicipioIbge) => {
                $scope.multiselectOptions = {
                    enableSearch: true,
                    displayProp: 'NO_BAIRRO',
                    scrollableHeight: '350px',
                    scrollable: true,
                    showUncheckAll:false,
                    showCheckAll:false
                };

                $scope.translateOptions = {
                    checkAll: "Selecionar Todos",
                    uncheckAll: "Retirar seleção de Todos",
                    enableSearch: "Pesquisa ativada",
                    searchPlaceholder: "Pesquisar",
                    buttonDefaultText: "Pesquise e/ou selecione os Bairros para agrupar",
                    dynamicButtonTextSuffix: "Bairros selecionados"
                };
                $scope.coMunicipioIbge = coMunicipioIbge;
                $scope.bairros = [];
                $scope.consultarListaBairros();
                $scope.consultarBairrosVinculados(coMunicipioIbge);
                $scope.selecionados = {};
                $scope.selecionados.bairros = [];
                $scope.selecionados.novo = {};
                $scope.showBairros = false;
            };

            $scope.consultarListaBairros = () => {
                $scope.progress = true;
                HttpService.search('bairro/lista/' + $scope.coMunicipioIbge, 'GET').then((res) => {
                    $scope.progress = false;
                    if (res.length === 0) {
                        appPrincipal.bootboxAlertSemOpcaoFechar(msgErro('005', 'Não é possivel agrupar! [Dados de bairros não encontrados]'));
                    } else {
                        $scope.bairros = res;
                        $scope.consultarListaBairrosVinculados();
                    }
                });
            };

            $scope.consultarListaBairrosVinculados = () => {
                $scope.progress = true;
                HttpService.search('bairro/vinculados/' + $scope.coMunicipioIbge, 'GET').then((res) => {
                    $scope.progress = false;
                    $scope.bairrosVinculados = res;
                });
            };

            $scope.agrupar = () => {
                $scope.selecionados.novo.DS_BAIRROS_AGRUPADO = $scope.selecionados.bairros;
                if ($scope.selecionados.novo.NO_AREA_BAIRRO === undefined) {
                    bootbox.alert('Digite para inserir um NOVO GRUPO ou selecione um nome para o(s) bairro(s)');
                    return false;
                } else if ($scope.selecionados.novo.DS_BAIRROS_AGRUPADO.length === 0) {
                    bootbox.alert('Selecione os bairros para agrupar!');
                    return false;
                } else {
                    $scope.selecionados.novo.CO_MUNICIPIO_IBGE = $scope.coMunicipioIbge;
                    $scope.selecionados.novo.NO_AREA_BAIRRO = $filter('uppercase')($scope.selecionados.novo.NO_AREA_BAIRRO);
                    $scope.progress = true;
                    HttpService.update('bairro/salvar', $scope.selecionados.novo).then((status) => {
                        if (status) {
                            $scope.init($scope.coMunicipioIbge);
                            appPrincipal.bootboxAlertSemOpcaoFechar('Grupo de bairros agrupado com sucesso!');
                        }
                        $scope.progress = false;
                    });
                }
            };

            $scope.selecionando = (item) => {
                let bairros = [];
                if (item !== undefined) {
                    if (item.isTag === undefined) {
                        angular.forEach($scope.bairros, (b, index) => {
                            angular.forEach(item.DS_BAIRROS_AGRUPADO.split('<br>'), (v, i) => {
                                if (b.NO_BAIRRO === v) {
                                    b.disabled = true;
                                    bairros.push(b);
                                }
                            });
                        });
                    } else {
                        item.DS_BAIRROS_AGRUPADO = [];
                        $scope.selecionados.novo = item;
                    }
                    $scope.showBairros = true;
                    $scope.selecionados.bairros = bairros;
                } else {
                    $scope.showBairros = false;
                    $scope.selecionados.bairros = bairros;
                }
            };

            $scope.tagTransform = function (newTag) {
                $scope.selecionados.novo = {
                    NO_AREA_BAIRRO: newTag,
                    DS_BAIRROS_AGRUPADO: $scope.selecionados.bairros
                };
                return $scope.selecionados.novo;
            };

            $scope.consultarBairrosVinculados = () => {
                $scope.dtColumns = [];
                let dtColumns = [
                    DTColumnBuilder.newColumn('NO_AREA_BAIRRO').withTitle('Novo bairro'),
                    DTColumnBuilder.newColumn('DS_BAIRROS_AGRUPADO').withTitle('Bairros Agrupados'),
                    DTColumnBuilder.newColumn('DT_ATUALIZACAO').withTitle('Atualização'),
                    DTColumnBuilder.newColumn(null).withTitle('Ações').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `&nbsp;
                            <a class="btn" style="color: #001f3f" ng-click="excluir(${data.CO_SEQ_BFA_AREA})">
                               <i class="fa fa-times" style="font-size: 30px"></i>
                            </a>`;
                        })
                ];
                appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'bairro/vinculados/' + $scope.coMunicipioIbge, 'GET', [], dtColumns);
            };

            $scope.excluir = (coArea) => {
                appPrincipal.bootboxConfirmSemOpcaoFechar(msgAlerta('001', 'grupo de bairros'), undefined, cfpLoadingBar, $scope, (confirm) => {
                    if (confirm) {
                        HttpService.delete(`bairro/desvincular`, coArea).then((status) => {
                            if (status) {
                                $scope.init($scope.coMunicipioIbge);
                                appPrincipal.bootboxAlertSemOpcaoFechar(msgAlerta('002', 'Grupo de bairros'));
                            } else {
                                appPrincipal.bootboxAlertSemOpcaoFechar(MSG_E004);
                            }
                        });
                    }
                });
            };

            $scope.voltar = () => {
                $window.location.href = "principal";
            };

        }
    ]
);
appPrincipal.controller('EasCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.multiselectOptions = {
                    enableSearch: true,
                    displayProp: 'NO_FANTASIA_CO_CNES',
                    scrollableHeight: '350px',
                    scrollable: true,
                    styleActive: true
                };

                $scope.translateOptions = {
                    checkAll: "Selecionar Todos",
                    uncheckAll: "Retirar seleção de Todos",
                    enableSearch: "Pesquisa ativada",
                    searchPlaceholder: "Pesquisar",
                    buttonDefaultText: "CLIQUE, PESQUISE E SELECIONE OS EAS",
                    dynamicButtonTextSuffix: "EAS SELECIONADOS"
                };
                $scope.dadosEas = [];
                $scope.selecionados = {};
                $scope.selecionados.eas = [];
                $scope.selecionados.easVinculo = [];
                $scope.selecionados.novo = {};
                $scope.percentual = {};
                $scope.carregarEas();

            };

            $scope.deselectAll = () => {
                $scope.selecionados.eas = $scope.selecionados.easVinculo;
                return true;
            };

            $scope.customEvents = {
                onDeselectAll: function(){
                    HttpService.search('eas/carregaEas', 'GET').then((r) => {
                        let selecionados = [];
                        angular.forEach(r, (eas) => {
                            if(eas.disabled === true){
                                selecionados.push(eas);
                            }
                        });
                        $scope.dadosEas = r;
                        $scope.selecionados.eas = selecionados;
                    });
                }
            };

            $scope.carregarEas = () => {
                HttpService.search('eas/carregaEas', 'GET').then((r) => {
                    let selecionados = [];
                    let selecionadosVinculo = [];
                    angular.forEach(r, (eas) => {
                        if (eas.CO_SEQ_EAS_VISIVEL !== null) {
                            selecionados.push(eas);
                        }
                        if(eas.disabled === true){
                            selecionadosVinculo.push(eas);
                        }
                    });
                    $scope.dadosEas = r;
                    $scope.selecionados.eas = selecionados;
                    $scope.selecionados.easVinculo = selecionadosVinculo;
                    $scope.percentual = {
                        vinculo: parseFloat(($scope.selecionados.eas.length * 100)/($scope.dadosEas.length)).toPrecision(2),
                        semVinculo: parseFloat((($scope.dadosEas.length-$scope.selecionados.eas.length)*100)/($scope.dadosEas.length)).toPrecision(2)
                    };
                });
            };

            $scope.salvar = () => {
                if ($scope.selecionados.eas.length === 0) {
                    appPrincipal.bootboxAlertSemOpcaoFecharTime(msgAlerta('005'));
                    return false;
                } else {
                    HttpService.insert('eas/cadastrar', $scope.selecionados.eas).then((res) => {
                        if (res.status) {
                            $scope.carregarEas();
                            appPrincipal.bootboxAlertSemOpcaoFecharTime(msgSucesso('001_1', 'Eas visíveis'));
                        }
                    });
                }
            };

            $scope.voltar = () => {
                $window.location.href = "principal";
            };
        }
    ]
);
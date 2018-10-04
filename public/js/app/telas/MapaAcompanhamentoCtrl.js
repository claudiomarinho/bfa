appPrincipal.controller('MapaAcompanhamentoCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.logradouros = [];
                $scope.profissionais = [];
                $scope.bairros = [{}];
                $scope.dadosMapa = {};
                $scope.consultarListaBairros();
                $scope.consultarListaEasVisiveis();
                $scope.consultarMapas();
            };

            $scope.voltar = () => {                
                $window.location.href = "principal";
            };

            $scope.consultarListaBairros = () => {
                HttpService.search('Mapaacompanhamento/listaBairros', 'GET').then((res) => {
                    $scope.bairros = res;
                });
            };

            $scope.consultarListaLogradouros = (bairro) => {
                var re = / /gi;
                var bairros = bairro.replace(re, "_");
                HttpService.search('Mapaacompanhamento/listaLogradouro/' + bairros, 'GET').then((res) => {
                    if (res) {
                        $scope.logradouros = res;
                    }
                });
            };

            $scope.consultarListaEasVisiveis = () => {
                HttpService.search('Mapaacompanhamento/consultaEasVisiveis', 'GET').then((res) => {
                    $scope.easVisiveis = res;
                });
            };

            $scope.consultarProfissionais = (cnes) => {
                HttpService
                    .search('Mapaacompanhamento/consultaProfissionaisEasVisiveis/' + cnes, 'GET')
                    .then((res) => {
                        if (res) {
                            $scope.profissionais = res;
                        }
                    });
            };

            $scope.consultarPovosIndigenas = () => {
                HttpService.search('Mapaacompanhamento/consultaPovosIndigenas', 'GET').then((res) => {
                    $scope.povosIndigenas = res;
                });
            };

            $scope.consultarMapas = () => {
                HttpService.search('Mapaacompanhamento/localiza', 'GET').then((res) => {
                    $scope.mapas = res;
                    setTimeout(() => {
                        $('.selectpicker').selectpicker('refresh');
                    }, 500);
                });
            };
        }
    ]
);
appPrincipal.controller('AcompanhamentoMapaCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.dadosMapa = {};
            };

            $scope.consultarMapa = function () {
                $scope.dtColumns = [];
                let dtColumns = [
                    DTColumnBuilder.newColumn('CO_SEQ_BFA_MAPA').withTitle('Código do Mapa'),
                    DTColumnBuilder.newColumn('DT_CADASTRO').withTitle('Data da Geração'),
                    DTColumnBuilder.newColumn(null).withTitle('Ação').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `<a class="btn" style="color: #006c1b" ng-click="gerarMapa('${data.CO_SEQ_BFA_MAPA}')">
                                    <i class="fa fa-external-link" style="font-size: 30px"></i>
                                </a>`;
                        })
                ];
                appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'mapaacompanhamento/localiza', 'POST', $scope.dadosMapa, dtColumns);
            };

            $scope.voltar = () => {                
                $window.location.href = "principal";
            };

            $scope.gerarMapa = (coMapa) => {
                $window.location.href = URL + 'mapaacompanhamento/acompanhamento/' + coMapa;
            };

        }
    ]
);
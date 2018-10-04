appPrincipal.controller('EasVisiveisCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.dadosEas = [];
                $scope.dadosVisiveis = [];
                $scope.consultarEasVisivel();
            };
          
            $scope.consultarEasVisivel = function () {
                $scope.dtColumns = [];
                let dtColumns = [
                    DTColumnBuilder.newColumn(null).withTitle('Selecione').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `<input type="checkbox">`;
                        }),
                    DTColumnBuilder.newColumn('CO_CNES').withTitle('CNES'),
                    DTColumnBuilder.newColumn('NO_ESTABELECIMENTO').withTitle('Estabelecimento')
                ];
                appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'eas/carregaEasVisiveis', 'POST', $scope.dadosVisiveis, dtColumns);
            };
        }
    ]
);
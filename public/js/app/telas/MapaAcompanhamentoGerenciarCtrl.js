appPrincipal.controller('MapaAcompanhamentoGerenciarCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.gerenciarMapa();
            };

            $scope.voltar = () => {                
                $window.location.href = "Mapaacompanhamento";
            };
            
            $scope.gerenciarMapa = function () {
                $scope.dtColumns = [];
                let dtColumns = [
                    DTColumnBuilder.newColumn(null).withTitle('Ação').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `<a class="btn" ng-click="visualizar('${data.CO_SEQ_BFA_MAPA}')">
                                    <i class="fa fa-download" style="font-size: 25px"></i>
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a class="btn" ng-click="excluirMapa('${data.CO_SEQ_BFA_MAPA}')">
                                    <i class="fa fa-times" style="font-size: 25px"></i>
                                    </a>`;
                        }),
                    DTColumnBuilder.newColumn('CO_SEQ_BFA_MAPA').withTitle('Código do Mapa'),
                    DTColumnBuilder.newColumn('DT_CADASTRO').withTitle('Data da Geração'),
                ];
                appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'mapaacompanhamento/localiza', 'POST', $scope.dadosMapa, dtColumns);
            };

            $scope.excluirMapa = (coSeq) => {
                appPrincipal.bootboxConfirmSemOpcaoFechar(msgAlerta('001', 'Mapa'), undefined, cfpLoadingBar, $scope, function (confirm) {
                    if (confirm) {
                        HttpService.insert('mapaacompanhamento/excluir/' + coSeq).then((res) => {
                            if (res.status) {
                                $scope.gerenciarMapa();
                                appPrincipal.bootboxAlertSemOpcaoFecharTime(msgAlerta('002', 'Mapa'));
                            }
                        });
                    }
                });
            };

            $scope.visualizar = (coSeq) => {
                $window.location.href = "Mapaacompanhamento/mapa/"+coSeq;
              
            };
        }
    ]
);
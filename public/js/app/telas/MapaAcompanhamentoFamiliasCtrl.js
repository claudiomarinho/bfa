appPrincipal.controller('MapaAcompanhamentoFamiliasCtrl',
    ['$scope', '$http', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window', '$templateCache', '$timeout',
        function ($scope, $http, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window, $templateCache, $timeout) {


            $scope.init = () => {
                $scope.dados = [];
                $scope.consultarMapaFamilias();
            };
            
            $scope.dtInstanceCallback = (_dtInstance) => {
                $scope.dtInstance = _dtInstance;
            };

            $scope.consultarMapaFamilias = () => {
                $scope.dtColumns = [];
                let dtColumns = [

                    DTColumnBuilder.newColumn(null).withTitle('Ações').withOption('width', '1%').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `<a class="btn btnAcompanhamento" style="color: #006c1b" ng-click="acompanharMapa('${data.CO_SEQ_BFA_PESSOA}','${data.CO_BFA_MAPA}')">
                                       <i class="fa fa-pencil-square-o" style="font-size: 30px"></i>
                                    </a>&nbsp;&nbsp;&nbsp;`
                        }),
                    DTColumnBuilder.newColumn('CO_BFA_FAMILIA').withTitle('Código Familiar').withOption('width', '1%').notSortable(),
                    DTColumnBuilder.newColumn('NO_PESSOA').withTitle('Nome').notSortable(),
                    DTColumnBuilder.newColumn('NU_NIS').withTitle('NIS').notSortable(),
                    DTColumnBuilder.newColumn('ST_OBRIGATORIO').withTitle('Obrigatório').notSortable(),
                    DTColumnBuilder.newColumn('ST_ACOMPANHADO').withTitle('Status do Acompanhamento').notSortable(),
                ];

                let createdRow = (row) => {
                    $compile(angular.element(row).contents())($scope);
                };

                $scope.dtOptions = DTOptionsBuilder.fromFnPromise(() => {
                    let url_string = window.location.href;
                    let arrElements = url_string.split('/');
                    let coSeq = arrElements[arrElements.length-1];
                    return HttpService.search('mapaacompanhamento/listaFamiliasMapa/'+coSeq, 'GET');
                }).withPaginationType('full_numbers')
                    .withButtons([
                        {extend: 'colvis', text: '<i class="fa fa-columns" aria-hidden="true"></i>'},
                        {extend: 'copy', text: '<i class="fa fa-clipboard" aria-hidden="true"></i>'},
                        {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i>'},
                        {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i>'}
                    ])
                    .withBootstrap()
                    .withScroller()
                    .withOption('deferRender', true)
                    .withOption('scrollY', 400)
                    .withOption('scrollCollapse', true);
                $scope.dtColumns = dtColumns;
                $scope.dtOptions.withOption('createdRow', createdRow);
                if ($scope.dtInstance !== undefined) {
                    $scope.dtInstance._renderer.reloadData();
                }

            };

            $scope.acompanharMapa = (coPessoa,coMapa) => {
                $window.location.href = URL + 'acompanhamento/cadastro/'+coPessoa+'/'+coMapa;
            };

            $scope.voltar = () => {
                $window.location.href = URL + 'acompanhamento';
            };
        }
    ]
);
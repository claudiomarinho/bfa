appPrincipal.controller('IndividuoCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window',
        function ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) {
            $scope.init = function () {
                $scope.dadosBeneficiario = {};
                $scope.dadosBeneficiario.NU_NIS;
                $scope.dadosBeneficiario.DT_NASCIMENTO;
            };

            $scope.somenteNumeros = (campo, model) => {
                if (!$.isNumeric(campo)) {
                    $scope.dadosBeneficiario[model] = '';
                }
            };

            $scope.consultarBeneficiario = function () {
                if($scope.dadosBeneficiario.NU_NIS){
                    if($scope.dadosBeneficiario.NU_NIS.length < 11){
                        bootbox.alert('Número do NIS deve conter 11 caracteres!');
                        return false;
                    }
                }
                if($scope.dadosBeneficiario.DT_NASCIMENTO){
                    if(!validaData($scope.dadosBeneficiario.DT_NASCIMENTO)){
                        bootbox.alert('Data de Nascimento inválida!');
                        return false;
                    }
                }

                $scope.dtColumns = [];
                let dtColumns = [
                    DTColumnBuilder.newColumn('NO_PESSOA').withTitle('Nome'),
                    DTColumnBuilder.newColumn('DT_NASCIMENTO').withTitle('Data de Nascimento'),
                    DTColumnBuilder.newColumn('DS_SEXO').withTitle('Sexo'),
                    DTColumnBuilder.newColumn('NU_NIS').withTitle('NIS'),
                    DTColumnBuilder.newColumn('ST_ACOMPANHADO').withTitle('Acompanhado'),
                    DTColumnBuilder.newColumn(null).withTitle('Ações').notSortable()
                        .renderWith(function (data, type, full, meta) {
                            return `<a class="btn" style="color: #006c1b" ng-click="acompanhar('${data.CO_SEQ_BFA_PESSOA}')">
                               <i class="fa fa-pencil-square-o" style="font-size: 30px"></i>
                            </a>&nbsp;&nbsp;&nbsp;
                            <a class="btn" style="color: #006c1b" ng-click="historico('${data.CO_BFA_FAMILIA}')">
                               <i class="fa fa-calendar" style="font-size: 30px"></i>
                            </a>`;
                        })
                ];
                appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'individuo/localiza', 'POST', $scope.dadosBeneficiario, dtColumns);
            };

            // $scope.consultarBeneficiario = function () {
            //     if ($scope.dadosBeneficiario.NU_NIS) {
            //         if ($scope.dadosBeneficiario.NU_NIS.length < 11) {
            //             bootbox.alert('Número do NIS deve conter 11 caracteres!');
            //             return false;
            //         }
            //     }
            //     if ($scope.dadosBeneficiario.DT_NASCIMENTO) {
            //         if (!validaData($scope.dadosBeneficiario.DT_NASCIMENTO)) {
            //             bootbox.alert('Data de Nascimento inválida!');
            //             return false;
            //         }
            //     }
            //
            //     $scope.dtColumns = [];
            //     let dtColumns = [
            //         DTColumnBuilder.newColumn('NO_PESSOA').withTitle('Nome').withOption('searchable', true),
            //         DTColumnBuilder.newColumn('DT_NASCIMENTO').withTitle('Data de Nascimento').withOption('searchable', true),
            //         DTColumnBuilder.newColumn('DS_SEXO').withTitle('Sexo').withOption('searchable', true),
            //         DTColumnBuilder.newColumn('NU_NIS').withTitle('NIS').withOption('searchable', true),
            //         DTColumnBuilder.newColumn('ST_ACOMPANHADO').withTitle('Acompanhado').withOption('searchable', true),
            //         DTColumnBuilder.newColumn(null).withTitle('Ações').notSortable().renderWith(function (data, type, full, meta) {
            //             return `<a class="btn" style="color: #006c1b" ng-click="acompanhar('${data.CO_SEQ_BFA_PESSOA}')">
            //                    <i class="fa fa-pencil-square-o" style="font-size: 30px"></i>
            //                 </a>&nbsp;&nbsp;&nbsp;
            //                 <a class="btn" style="color: #006c1b" ng-click="historico('${data.CO_BFA_FAMILIA}')">
            //                    <i class="fa fa-calendar" style="font-size: 30px"></i>
            //                 </a>`;
            //         })
            //     ];
            //     appPrincipal.consultarDtGridPaginado(DTOptionsBuilder, HttpService, $scope, $compile, 'individuo/localiza2', 'POST', $scope.dadosBeneficiario, dtColumns);
            //     $scope.dtOptions = DTOptionsBuilder
            //         .newOptions()
            //         .withFnServerData(serverData)
            //         .withDataProp('data') // tried data aswell
            //         .withOption('serverSide', true)
            //         .withOption('paging', true)
            //         .withOption('stateSave', true)
            //         .withOption('searching', false)
            //         .withOption('lengthMenu', [25, 50, 100])
            //         .withDisplayLength(25)
            //         .withPaginationType('full_numbers')
            //         .withButtons([
            //             {extend: 'colvis', text: '<i class="fa fa-columns" aria-hidden="true"></i>'},
            //             {extend: 'copy', text: '<i class="fa fa-clipboard" aria-hidden="true"></i>'},
            //             {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i>'},
            //             {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i>'}
            //         ])
            //         .withBootstrap();
            //
            //     function serverData(sSource, aoData, fnCallback, oSettings) {
            //         var draw = aoData[0].value;
            //         var limit = aoData[4].value;               // item per page
            //         var order = aoData[2].value[0].dir;    // order by asc or desc
            //         var orderName = aoData[1].value[aoData[2].value[0].column].data;
            //         var start = aoData[3].value;              // start from
            //         var search = aoData[5].value.value;
            //         var searchPrincipal = $scope.dadosBeneficiario;           // search string
            //
            //         HttpService.executeDT('individuo/localiza2', start, limit, order, orderName, search, searchPrincipal).then(function (result) {
            //             var records = {
            //                 'draw': draw,
            //                 'recordsTotal': result.data.total.QT_TOTAL,
            //                 'recordsFiltered': result.data.total.QT_TOTAL,
            //                 'data': result.data.res
            //             };
            //             fnCallback(records);
            //         });
            //     }
            // }

        }
    ]
);
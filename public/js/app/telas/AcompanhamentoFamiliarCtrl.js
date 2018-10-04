appPrincipal.controller('AcompanhamentoFamiliarCtrl', [
    "$scope",
    "cfpLoadingBar",
    "DTOptionsBuilder",
    "DTColumnBuilder",
    "HttpService",
    "$compile",
    "$window",
    ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) => {
        $scope.init = (coFamilia) => {
            $scope.coFamilia = coFamilia;
            $scope.beneficiarios = [];
            $scope.endereco = {};
            $scope.result = [];
            $scope.consulta = [];
            $scope.dtOptions = [];
            $scope.dtColumns = [];
            $scope.NIS = 235468879841;
            $scope.listarBeneficiarios();
        };

        $scope.listarBeneficiarios = () => {
            HttpService.search('acompanhamento/listaIndividuosFamilia/'+$scope.coFamilia, 'GET').then((result) => {
                console.log(result);
                if(result.length > 0){
                    $scope.beneficiarios = result;
                    $scope.endereco = result[0]['DS_ENDERECO'];
                }else{
                    appPrincipal.bootboxAlertSemOpcaoFechar(msgErro('005', 'Código familiar não encontrado!'), URL+'principal');
                }
            });
        };

        $scope.consultarHistorico = () => {
            let dtColumns = [
                DTColumnBuilder.newColumn('NO_PESSOA').withTitle('Beneficiário'),
                DTColumnBuilder.newColumn('DT_ACOMPANHAMENTO').withTitle('Data de acompanhamento'),
                DTColumnBuilder.newColumn(null).withTitle('Ações').notSortable()
                    .renderWith((data, type, full, meta) => {
                        return `<a class="btn" style="color: #001f3f"  ng-click="visualizar('${data.CO_SEQ_BFA_PESSOA}')">
                               <i class="fa fa-search" style="font-size: 30px"></i>
                            </a>&nbsp;&nbsp;&nbsp;
                            <a class="btn" style="color: #001f3f" ng-click="alterar('${data.CO_SEQ_BFA_PESSOA}')">
                               <i class="fa fa-pencil-square-o" style="font-size: 30px"></i>
                            </a>`;
                    })
            ];
            appPrincipal.consultarDtGrid(DTOptionsBuilder, HttpService, $scope, $compile, 'acompanhamento/listaAcompanhamentoRealizado/'+$scope.coFamilia, 'GET', $scope.consulta, dtColumns);
        };

        $scope.acompanhar = (coPessoa, stResponsavel) => {
            $window.location.href = URL + 'acompanhamento/cadastro/'+coPessoa;
        };

        $scope.visualizar = (coPessoa) => {
            $window.location.href = URL + 'acompanhamento/cadastro/'+coPessoa;
        };

        $scope.alterar = (coPessoa) => {
            $window.location.href = URL + 'individuo/cadastro/'+coPessoa;
        };

        $scope.voltar = () => {
            $window.location.href = URL + 'acompanhamento';
        };

    }
]);
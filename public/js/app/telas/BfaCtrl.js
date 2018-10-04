appPrincipal.controller('BfaCtrl', [
    "$scope",
    "$http",
    "cfpLoadingBar",
    "DTOptionsBuilder",
    "DTColumnBuilder",
    "HttpService",
    "$compile",
    "$window",
    ($scope, $http, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window) => {

        $scope.init = () => {
            //$scope.stAcompanhamento = 1;
        };

        $scope.getMunicipios = function(estado) {            
            $http
                .get(URL + "Welcome/carregarMunicipio/" + estado)
                .then(function(result) {
                    if (result.status === 200) {
                        $scope.municipios = result.data;
                        $scope.$applyAsync(function() {
                            $("#coMunicipioIbge").selectpicker("refresh");
                        });
                    }
                })
                .catch(function(response) {
                    console.debug("Erro: " + response.data);
                });
        };

        $scope.adicionarSessao = function(municipio) {
            $http
                .get(URL + "Welcome/adicionarSessao/" + municipio)
                .then(function(result) {
                    if (result.status === 200) {
                        window.location.reload();
                    }
                })
                .catch(function(response) {
                    console.debug("Erro: " + response.data);
                });
        };

        $scope.acompanhar = (coPessoa) => {
            $window.location.href = URL + 'acompanhamento/cadastro/'+coPessoa;
        };

        $scope.editar = (coPessoa) => {
            $window.location.href = URL + 'individuo/cadastro/'+coPessoa;
        };

        $scope.historico = (coFamilia) => {
            $window.location.href = URL + 'acompanhamento/familiar/'+coFamilia;
        };

        $scope.gerarMapa = (coMapa) => {
            $window.location.href = URL + 'mapaacompanhamento/acompanhamento/'+coMapa;
        };

        $scope.voltar = () => {
            $window.location.href = "principal";
        };
    }
]);
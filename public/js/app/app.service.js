appPrincipal.service("HttpService", ["$q", "$http", "$rootScope", HttpService]);

function HttpService($q, $http, $rootScope) {

    this.executeDT = function execute(urlenvio, start, limit, order, orderName, search, dados = {}) {
        var defered = $q.defer();
        $http({
            url: URL + urlenvio + '/' + start + '/' + limit + '/' + order + '/' + orderName + '/' + search,
            method: 'POST',
            data: dados
        })
        .then(function (result) {
            defered.resolve(result);
        })
        .catch(function (err) {
            defered.reject(err);
        });
        return defered.promise;
    };

    this.search = function (urlenvio, metodo, dados) {
        if (!metodo) {
            metodo = 'GET';
        }
        let deferred = $q.defer();
        let request;
        let countDados = false;
        if (Array.isArray(dados)) {
            countDados = dados.length === 0;
        }
        if (dados === undefined || angular.equals(dados, {}) === true || countDados === true) {
            request = $http({
                method: metodo,
                url: URL + urlenvio,
                headers: {"Content-Type": "application/json"}
            });
        } else {
            let config;
            if (metodo === 'GET') {
                config = {
                    method: metodo,
                    url: URL + urlenvio,
                    params: dados,
                    headers: {"Content-Type": "application/json"}
                }
            } else {
                config = {
                    method: metodo,
                    url: URL + urlenvio,
                    data: dados,
                    headers: {"Content-Type": "application/json"}
                }
            }
            request = $http(config);
        }
        request.then(
            (data) => {
                data.progress = false;
                deferred.resolve(data.data);
            },
            (reason) => {
                reason.progress = false;
                if (reason instanceof SyntaxError) {
                    console.warn('Há problemas com a sintaxe de retorno da consulta, o objeto retornado não é JSON!');
                    appPrincipal.bootboxAlertSemOpcaoFechar(msgErro('005', reason.message), 'principal');
                }
                if (reason.status === 401) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(reason.data.msg, reason.data.url);
                }
                if (reason.status === 500) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(MSG_E005_1, 'principal');
                }
                $rootScope.progress = false;
                deferred.reject(reason);
            });
        return deferred.promise;
    };
    this.insert = function (urlenvio, dados) {
        let deferred = $q.defer();
        $rootScope.progress = true;
        $http({
            method: 'POST',
            url: URL + urlenvio,
            data: dados,
            headers: {"Content-Type": "application/json"}
        }).then(
            (data) => {
                $rootScope.progress = false;
                deferred.resolve(data.data);
            },
            (reason) => {
                $rootScope.progress = false;
                if (reason instanceof SyntaxError) {
                    console.warn('Há problemas com a sintaxe de retorno do salvar, o objeto retornado não é JSON!');
                    appPrincipal.bootboxAlertSemOpcaoFechar(msgErro('001', reason.message), 'principal');
                }
                if (reason.status === 401) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(reason.data.msg, reason.data.url);
                }
                if (reason.status === 500) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(MSG_E001);
                }
                deferred.reject(reason);
            }
        );
        return deferred.promise;
    };

    this.update = function (urlenvio, dados, id) {
        let deferred = $q.defer();
        $http({
            method: 'PUT',
            url: URL + urlenvio,
            data: {id: id, data: dados},
            headers: {"Content-Type": "application/json"}
        }).then(
            (data) => {
                deferred.resolve(data.status);
            },
            (reason) => {
                if (reason.status === 401) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(reason.data.msg, reason.data.url);
                }
                if (reason.status === 500) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(MSG_E001);
                }
                deferred.reject(reason);
            }
        );
        return deferred.promise;
    };

    this.delete = function (urlenvio, id) {
        let deferred = $q.defer();
        $http({
            method: 'DELETE',
            url: URL + urlenvio,
            data: {id: id},
            headers: {"Content-Type": "application/json"}
        }).then(
            (data) => {
                deferred.resolve(data.status);
            },
            (reason) => {
                deferred.reject(reason);
                if (reason.status === 401) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(reason.data.msg, reason.data.url);
                }
                if (reason.status === 500) {
                    appPrincipal.bootboxAlertSemOpcaoFechar(MSG_E004);
                }
            }
        );
        return deferred.promise;
    };
}
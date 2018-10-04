const appPrincipal = angular
    .module("appPrincipal", [
        "angular-loading-bar",
        "ngAnimate",
        "angularjs-dropdown-multiselect",
        'datatables',
        'datatables.bootstrap',
        'datatables.buttons',
        'datatables.scroller',
        'ngResource',
        'ui.toggle',
        'ngSanitize',
        'datatables.fixedheader',
        'mgcrea.ngStrap',
        'rzModule',
        'ui.select'
    ])
    .run(($rootScope, $http, $compile, $window, DTDefaultOptions) => {
        DTDefaultOptions.setLanguage({
            sUrl: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json'
        });
        DTDefaultOptions.setDisplayLength(25);
        DTDefaultOptions.setLoadingTemplate('<h3 class="text-center"><i class="fa fa-spin fa-refresh"></i> Consultando...</h3>');
        $http.defaults.transformRequest.push((data) => {
            $rootScope.progress = true;
            // $('body').attr('style', 'padding-right:0px!important;');
            return data;
        });
        $http.defaults.transformResponse.push((data) => {
            $rootScope.progress = false;
            // $('body').attr('style', 'padding-right:0px!important;');
            return data;
        });
    });


appPrincipal.isDisabled = false;
appPrincipal.fecharBox = false;

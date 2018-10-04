appPrincipal.bootboxAlertSemOpcaoFechar = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
    appPrincipal.isDisabled = true;
    if (functionCallBack === undefined) {
        functionCallBack = function () {
            if (url !== undefined) {
                window.location.href = url;
                rootScope.progress = true;
            }
        };

    }
    bootbox.alert({
        message: '<span class="text-blue">' + msg + "</span>",
        closeButton: false,
        onEscape: false,
        callback: functionCallBack
    });
};

appPrincipal.bootboxAlertSemOpcaoFecharRedirecionamento = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
    localStorage.removeItem("msgAlert");
    appPrincipal.isDisabled = true;
    if (functionCallBack === undefined) {
        functionCallBack = function () {
            if (url !== undefined) {
                window.location.href = url;
            }
        };
    }
    localStorage.setItem('msgAlert', msg);
    functionCallBack();
};

appPrincipal.bootboxAlertSemOpcaoFecharTime = function (msg, url, cfpLoadingBar, rootScope, functionCallBack, time = 2500) {
    appPrincipal.isDisabled = true;
    if (functionCallBack === undefined) {
        functionCallBack = function () {
            if (url !== undefined) {
                window.location.href = url;
                rootScope.progress = true;
            }
        };
    }
    bootbox.alert({
        message: '<span class="text-blue">' + msg + "</span>",
        closeButton: false,
        onEscape: false,
        callback: functionCallBack
    });
    setTimeout(() => {
        bootbox.hideAll();
    }, time);
};

appPrincipal.bootboxConfirmSemOpcaoFechar = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
    if (functionCallBack === undefined) {
        functionCallBack = function (result) {
            appPrincipal.mostrarCarregando(true);
            if (result === true) {
                appPrincipal.mostrarCarregando(false);
                window.location.href = url;
                rootScope.progress = true;
            }
        };
        setTimeout(functionCallBack, 3000);
    }

    bootbox.confirm({
        message: '<span class="text-blue">' + msg + "</span>",
        closeButton: false,
        onEscape: false,
        callback: functionCallBack
    });
};

appPrincipal.bootboxConfirmYesNo = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
    if (functionCallBack === undefined) {
        functionCallBack = function (result) {
            appPrincipal.mostrarCarregando(true);
            if (result === true) {
                appPrincipal.mostrarCarregando(false);
                window.location.href = url;
                rootScope.progress = true;
            }
        };
    }
    bootbox.confirm({
        message: '<span class="text-blue">' + msg + "</span>",
        onEscape: false,
        buttons: {
            cancel: {
                label: "Não"
            },
            confirm: {
                label: "Sim",
                className: 'btn-primary'
            },
        },
        callback: functionCallBack
    });
};

appPrincipal.mostrarCarregando = function (cfpLoadingBar, complete) {
    cfpLoadingBar.start();
    cfpLoadingBar.inc();
    cfpLoadingBar.set(0.33);
    if (complete === true) {
        cfpLoadingBar.complete();
    }
};

appPrincipal.consultarDtGridPaginado = function (DTOptionsBuilder, HttpService, scope, compile, url, method, params, dtColumns) {

    scope.createdRow = function (row) {
        compile(angular.element(row).contents())(scope);
    };
    scope.dtInstanceCallback = function (_dtInstance) {
        scope.dtInstance = _dtInstance;
    };
    scope.serverData = function(sSource, aoData, fnCallback, oSettings) {
        const draw = aoData[0].value;
        let limit = aoData[4].value;               // item per page
        let order = aoData[2].value[0].dir;    // order by asc or desc
        let orderName = aoData[1].value[aoData[2].value[0].column].data;
        let start = aoData[3].value;              // start from
        let search = aoData[5].value.value;
        let searchPrincipal = scope.dadosBeneficiario;           // search string

        HttpService.executeDT(url, start, limit, order, orderName, search, searchPrincipal).then(function (result) {
            let records = {
                'draw': draw,
                'recordsTotal': result.data.total.QT_TOTAL,
                'recordsFiltered': result.data.total.QT_TOTAL,
                'data': result.data.res
            };
            fnCallback(records);
        });
    };

    scope.dtOptions = DTOptionsBuilder
        .newOptions()
        .withFnServerData(scope.serverData)
        .withDataProp('data')
        .withOption('serverSide', true)
        .withOption('paging', true)
        .withOption('stateSave', true)
        .withOption('searching', false)
        .withOption('lengthMenu', [25, 50, 100])
        .withDisplayLength(25)
        .withPaginationType('full_numbers')
        .withButtons([
            {extend: 'colvis', text: '<i class="fa fa-columns" aria-hidden="true"></i>'},
            {extend: 'copy', text: '<i class="fa fa-clipboard" aria-hidden="true"></i>'},
            {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i>'},
            {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i>'}
        ])
        .withBootstrap();
    scope.dtColumns = dtColumns;
    scope.dtOptions.withOption('createdRow', scope.createdRow);
    if (scope.dtInstance !== undefined) {
        scope.dtInstance._renderer.reloadData();
    }
};

appPrincipal.consultarDtGrid = function (DTOptionsBuilder, HttpService, scope, compile, url, method, params, dtColumns) {

    scope.createdRow = function (row) {
        compile(angular.element(row).contents())(scope);
    };
    scope.dtInstanceCallback = function (_dtInstance) {
        scope.dtInstance = _dtInstance;
    };
    scope.dtOptions = DTOptionsBuilder.fromFnPromise(function () {
        return HttpService.search(url, method, params);
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
        .withOption('scroller', 60)
        .withOption('scrollCollapse', true);
    scope.dtColumns = dtColumns;
    scope.dtOptions.withOption('createdRow', scope.createdRow);
    if (scope.dtInstance !== undefined) {
        scope.dtInstance._renderer.reloadData();
    }
};

function somenteNumeros(num) {
    let er = /[^0-9]/;
    er.lastIndex = 0;
    let campo = num;
    if (er.test(campo.value)) {
        campo.value = "";
    }
}

function maiuscula(texto) {
    texto.value = texto.value.toUpperCase();
}

function retornaDataJs(date) {
    let matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    let d = matches[1];
    let m = matches[2] - 1;
    let y = matches[3];
    let composedDate = new Date(y, m, d);
    return composedDate;
}

function validaData(date) {
    let matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    let d = matches[1];
    let m = matches[2] - 1;
    let y = matches[3];
    let composedDate = new Date(y, m, d);
    return composedDate.getDate() == d &&
        composedDate.getMonth() == m &&
        composedDate.getFullYear() == y;
}

function startCountdown(tempo) {
    if ((tempo - 1) >= 0) {
        var min = parseInt(tempo / 60);
        var seg = tempo % 60;
        if (min < 10) {
            min = "0" + min;
            min = min.substr(0, 2);
        }
        if (seg <= 9) {
            seg = "0" + seg;
        }
        let horaImprimivel = '00:' + min + ':' + seg;

        if (tempo === 120) {
            appPrincipal.bootboxConfirmSemOpcaoFechar(MSG_A004, undefined, undefined, undefined, (resp) => {
                if (resp) {
                    location.reload();
                }
            });
        }
        $("#sessao").html(horaImprimivel);
        setTimeout(function () {
            startCountdown(tempo - 1)
        }, 1000);
    } else {
        bootbox.hideAll();
        appPrincipal.bootboxAlertSemOpcaoFechar(MSG_A004_1, undefined, undefined, undefined, function () {
            location.reload();
        });
    }
}


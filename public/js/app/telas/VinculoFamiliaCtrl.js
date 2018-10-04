appPrincipal.controller('VinculoFamiliaCtrl',
    ['$scope', '$http', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window', '$templateCache',
        '$q', function ($scope, $http, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window, $templateCache) {

        $scope.init = (coMunicipioIbge) => {
            $.fn.dataTable.ext.errMode = 'none';
            $scope.coMunicipioIbge = coMunicipioIbge;
            $scope.listaEasVisiveis();
            $scope.listaBairros();

            $scope.dadosEas = [];
            $scope.selecionados = {};
            $scope.selecionados.eas = [];
            $scope.selecionados.easVinculo = [];
            $scope.selecionados.novo = {};
            $scope.percentual = {};
            $scope.selectedBairro = '';

            $scope.selected = {};
            $scope.selection = {};
            $scope.selecionouproffiltro = false;

            $scope.vincularAct = true;
            $scope.alertSelectEas = true;
            $scope.alertSelectProfissional = false;

            $scope.vinculacaoAct = false;

            $scope.vinculartodos = false;
            $scope.desvinculartodos = false;

            $scope.processaTodos = false;
            $scope.indexProgressProcessaTodos = 0;

            $scope.indice = 0;
            $scope.numvinculacao = 0;
            $scope.pesquisado = false;

            $('#header_nav').css("visibility", "hidden");
            $('#vinculadiv').hide();
        };

        $scope.voltar = () => {
            $window.location.href = "principal";
        };

        $scope.listaBairros = function () {
            $http.get(URL + 'bairro/todosVinculados/' + $scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listarbairros = objResponse.data;
                    $scope.$applyAsync(function () {
                        $('#filtroBairro').selectpicker('refresh');
                        $('#filtroBairro').selectpicker('render');
                    });
                },
                function (error) {
                    bootbox.alert(MSG_E001);
                }
            );
        };

        $scope.listaEasVisiveis = function () {
            $http.get(URL + 'vinculo/listaEasVisiveis/' + $scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listareasvisiveis = objResponse.data;
                    $scope.$applyAsync(function () {
                        $('#filtroEas').selectpicker('refresh');
                        $('#filtroEas').selectpicker('render');
                        $('#filtroEasParaVincular').selectpicker('refresh');
                        $('#filtroEasParaVincular').selectpicker('render');
                    });
                },
                function (error) {
                    bootbox.alert(MSG_E001);
                }
            );
        };

        $scope.listarProfissionaisEasVisiveisFiltro = function (eas) {
            $scope.listaprofissionais = $scope.listaProfissionaisEasVisiveisFiltro(eas);
        };

        $scope.listaProfissionaisEasVisiveisFiltro = function (eas) {
            var eascocnes = '';
            if (eas) {
                var eascocnes = eas.CO_CNES;
                $scope.selection.noeasvisivelfiltro = eas.NO_EAS_VISIVEL;
            }
            $http.get(URL + 'vinculo/consultaProfissionaisEasVisiveis/' + eascocnes).then(
                function (objResponse) {
                    $scope.listaprofissionaisfiltro = objResponse.data;
                    $scope.$applyAsync(function () {
                        $('#filtroProfissional').selectpicker('refresh');
                        $('#filtroProfissional').selectpicker('render');
                        $('#filtroProfissionalParaVincular').selectpicker('refresh');
                        $('#filtroProfissionalParaVincular').selectpicker('render');
                    });
                },
                function (error) {
                    bootbox.alert(MSG_E001);
                }
            );
        }

        $scope.listarProfissionaisEasVisiveisVincular = function (eas) {
            $scope.listaprofissionais = $scope.listaProfissionaisEasVisiveisVincular(eas);
        };

        $scope.listaProfissionaisEasVisiveisVincular = function (eas) {

            if ($('#filtroEasParaVincular').val() == '') {
                $scope.alertSelectProfissional = false;
                $scope.alertSelectEas = true;
            } else {
                $scope.alertSelectProfissional = true;
                $scope.alertSelectEas = false;
            }
            $scope.selection.easvisivelvincular = eas;
            var eascocnes = '';
            if (eas) {
                var eascocnes = eas.CO_CNES;
                $scope.selection.noeasvisivelvincular = eas.NO_EAS_VISIVEL;
            }
            $http.get(URL + 'vinculo/consultaProfissionaisEasVisiveis/' + eascocnes).then(
                function (objResponse) {
                    $scope.listaprofissionaisvincular = objResponse.data;
                    $scope.$applyAsync(function () {
                        $('#filtroProfissional').selectpicker('refresh');
                        $('#filtroProfissional').selectpicker('render');
                        $('#filtroProfissionalParaVincular').selectpicker('refresh');
                        $('#filtroProfissionalParaVincular').selectpicker('render');
                    });
                    if ($('#filtroEasParaVincular').val() == '') {
                        $scope.vincularAct = true;
                        $('.vincular').attr('disabled', true);
                    } else {
                        $scope.vincularAct = false;
                        $('.vincular').attr('disabled', false);
                    }
                },
                function (error) {
                    bootbox.alert(MSG_E001);
                }
            );

        }

        function delay(ms) {
            var cur_d = new Date();
            var cur_ticks = cur_d.getTime();
            var ms_passed = 0;
            while (ms_passed < ms) {
                var d = new Date();  // Possible memory leak?
                var ticks = d.getTime();
                ms_passed = ticks - cur_ticks;
                // d = null;  // Prevent memory leak?
            }
        }

        $scope.selecionaProfissionalFiltro = function (profissional) {
            if (profissional) {
                $scope.selecionouproffiltro = true;
                $scope.selection.cocnsprofvisivelfiltro = profissional.CO_CNS;
                $scope.selection.noprofvisivelfiltro = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelfiltro = null;
                $scope.selection.noprofvisivelfiltro = '';
            }
        };

        $scope.selecionaProfissionalVincular = function (profissional) {
            if (profissional) {
                $scope.selection.cocnsprofvisivelvincular = profissional.CO_CNS;
                $scope.selection.noprofvisivelvincular = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelvincular = null;
                $scope.selection.noprofvisivelfiltro = '';
            }

            if (profissional != null) {
                $scope.alertSelectProfissional = false;
            } else {
                if ($scope.selectedEasParaVincular != null) {
                    $scope.alertSelectProfissional = true;
                }
            }
        };

        $scope.dtInstanceCallback = (_dtInstance) => {
            $scope.dtInstance = _dtInstance;
        };

        $scope.listaFamilias = function () {
            $scope.disabledVincular = true;
            $scope.dtColumns = [];
            let dtColumns = [
                DTColumnBuilder.newColumn(null).notSortable().withTitle('Ação').withOption('width', '80px').withClass('centered')
                    .renderWith(function (data, type, full, meta) {
                        $scope.selected[full.CODFAMILIAR] = false;
                        let btn = (full.check) ? 'btn-danger' : 'btn-primary';
                        let value = (full.check) ? 'Desvincular' : 'Vincular';
                        let disabled = (full.check) ? '' : 'vincularAct';
                        return '<input type="button" class="btn ' + btn + ' vincular" id="myselector' + data.IDX_LISTA + '" ng-model="selected[' + data.CODFAMILIAR + ']" value="' + value + '" ng-click="vincular(' + data.CODFAMILIAR + ',' + data.IDX_LISTA + ', ' + full.check + ')" ng-disabled="progress"   />';
                    }),
                DTColumnBuilder.newColumn('CODFAMILIAR').withTitle('Cód. Familiar<br/><small>(clique para ver beneficiários)</small>').withOption('className', 'details-control').withOption('width', '120px'),
                DTColumnBuilder.newColumn('BENEFICIARIOS').withTitle('Beneficiários').withClass('hiddencol'),
                DTColumnBuilder.newColumn('ENDERECO').withTitle('Endereço').withClass('centered'),
                DTColumnBuilder.newColumn('BAIRRO').withTitle('Bairro').withClass('centered'),
                DTColumnBuilder.newColumn('EAS').withTitle('EAS').withClass('centered'),
                DTColumnBuilder.newColumn('NOEASORIGINAL').withTitle('NOEASORIGINAL').withClass('hiddencol'),
                DTColumnBuilder.newColumn('COEASORIGINAL').withTitle('COEASORIGINAL').withClass('hiddencol'),
                DTColumnBuilder.newColumn('PROFISSIONAL').withTitle('Profissional').withClass('centered'),
                DTColumnBuilder.newColumn('NOPROFORIGINAL').withTitle('NOPROFORIGINAL').withClass('hiddencol'),
                DTColumnBuilder.newColumn('COCNSPROFORIGINAL').withTitle('COCNSPROFORIGINAL').withClass('hiddencol')
            ];


            let createdRow = (row) => {
                $compile(angular.element(row).contents())($scope);
            };


            var getData = function () {
                $scope.selection.bairro = $scope.selectedBairro;
                $scope.selection.coseqeas = $('#filtroEas').val();
                $scope.selection.profissional = $('#filtroProfissional').val();
                $scope.selection.nis = $('#filtroNis').val();
                if ($('#semvinculo').is(":checked")) $scope.selection.semvinculo = true; else $scope.selection.semvinculo = false;

                let retorno = HttpService.search('vinculo/listaFamiliasParaVinculacao', 'POST', angular.toJson($scope.selection));
                retorno
                    .then((r) => {
                        $scope.todasFamilias = [];
                        if (r.data != undefined) {
                            $scope.tamanholista = (r.data.length);
                            angular.forEach(r.data, function (v) {
                                $scope.todasFamilias.push({
                                    coFamilia: v.CODFAMILIAR,
                                    arrPessoas: v.OBJ_FAMILIA,
                                    coCnes: null,
                                    coCns: null
                                });
                            });
                        }
                        bootbox.hideAll();
                    })
                    .catch(function (r) {
                        console.debug("Erro: " + r.data);
                        bootbox.hideAll();
                    });

                return retorno;

            };

            $scope.dtOptions = DTOptionsBuilder.fromFnPromise(getData)
                .withOption('paging', false)
                .withDataProp('data')
                .withOption('stateSave', true)
                .withDOM('<"clear"><"top"<".row"<".col-md-6"i><".col-md-6"f>>' +
                    '<".row"<".col-md-6"l><".col-md-6"p>><"clear">T><".col-md-12"rt>');

            $scope.dtColumns = dtColumns;

            $scope.dtOptions.withOption('createdRow', createdRow);
            if ($scope.dtInstance !== undefined) {
                $scope.dtInstance._renderer.reloadData();
            }

            $scope.format = function (d) {
                if (!d) return '';
                var string = '';
                for (var i = 0; i < Object.keys(d.OBJ_FAMILIA).length; i++) {
                    string += ("<p>NIS: " + d.OBJ_FAMILIA[i].NU_NIS + " - NOME: " + d.OBJ_FAMILIA[i].NO_PESSOA + "</p>");
                }
                return string;
            };
            $scope.carregarClickBeneficiarios();

        };

        $scope.carregarClickBeneficiarios = function () {
            $('body').on('click', '.details-control', function () {
                var table3 = $('#datatable').DataTable();
                var tr = $(this).closest('tr');
                var row = table3.row(tr);
                if (row.child.isShown()) {
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    row.child($scope.format(row.data())).show();
                    tr.addClass('shown');
                }
            })
        };

        $scope.vincularTodosFamilia = function (vincular = true) {
            angular.forEach($scope.todasFamilias, function (v, i) {
                v.coCnes = (!vincular) ? '' : $scope.selectedEasParaVincular.CO_SEQ_EAS_VISIVEL;
                v.coCns = (!vincular) ? '' : ($scope.selectedProfissionalParaVincular === undefined) ? null : $scope.selectedProfissionalParaVincular.CO_CNS;
                $scope.todasFamilias[i] = v;
            });
            let msgVincular = '';
            if (vincular) {
                msgVincular = 'Deseja víncular TODAS as famílias no EAS: ' + $scope.selectedEasParaVincular.NO_EAS_VISIVEL + '?<br><small class="text-warning">Obs.: Dependendo do número de famílias esse processo pode levar alguns minutos!</small>';
            } else {
                msgVincular = 'Deseja desvíncular TODAS as famílias dos EAS\'s ?<br><small class="text-warning">Obs.: Dependendo do número de famílias esse processo pode levar alguns minutos!</small>';
            }
            appPrincipal.bootboxConfirmSemOpcaoFechar(msgVincular, undefined, cfpLoadingBar, $scope, function (r) {
                if (r) {
                    $('input, select').attr('disabled', true);
                    bootbox.dialog({
                        onEscape: false,
                        closeButton: false,
                        message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> - Aguarde, executando a ação...<br><small>Esse processo pode levar alguns minutos!</small></div>'
                    });
                    // $('#datatable_wrapper').hide();
                    HttpService.search('vinculo/vinculaPessoasPorFamiliaTodos', 'POST', $scope.todasFamilias).then(function (res) {
                        bootbox.hideAll();
                        $('input, select').attr('disabled', false);

                        if (res.status) {
                            let vinc =  (vincular) ? 'vinculadas': 'desvinculadas';
                            appPrincipal.bootboxAlertSemOpcaoFechar('Todas as famílias '+vinc+' com sucesso!', undefined, cfpLoadingBar, $scope, function(){
                                if ($scope.dtInstance !== undefined) {
                                    $scope.dtInstance.rerender();
                                    $scope.listaFamilias();
                                }
                                $scope.carregarClickBeneficiarios();
                            });
                        } else {
                            let vinc =  (vincular) ? 'vincular': 'desvincular';
                            appPrincipal.bootboxAlertSemOpcaoFechar('Ocorreu um erro ao '+vinc+' famílias!');
                        }
                    });
                }

            });

        };

        $scope.reload = function () {
            if($scope.tipoPesquisa == '1'){
                if ($scope.selectedBairro === undefined || $scope.selectedBairro === '') {
                    appPrincipal.bootboxAlertSemOpcaoFechar('Selecione o bairro!');
                    return false;
                }
            }else{
                if($scope.nuNIS === undefined || $scope.nuNIS === ''){
                    appPrincipal.bootboxAlertSemOpcaoFechar('Digite o número do NIS, deve conter 11 digitos!');
                    return false;
                }
            }
            $("#header_nav").css({visibility: "visible", opacity: 0.0}).animate({opacity: 1.0}, 800);
            $scope.selectedEasParaVincular = null;
            $scope.selection.noeasvisivelfiltrolistado = $scope.selection.noeasvisivelfiltro; //salvar filtro que originou a lista
            // $scope.dtInstance.rerender();
            $scope.vinculacaoAct = true;
            $scope.listaFamilias();
            bootbox.dialog({
                onEscape: false,
                closeButton: false,
                message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> - Aguarde, executando a consulta...<br><small>Esse processo pode levar alguns minutos!</small></div>'
            });
            $scope.travaDestravaAposPesquisa();
        };

        $scope.travaDestravaAposPesquisa = function () {
            $scope.pesquisado = true;
            $('#filtroBairro').prop('disabled', true);
            $('#semvinculo').prop('disabled', true);
            $('#filtroEas').prop('disabled', true);
            $('#filtroProfissional').prop('disabled', true);
            $('#filtroNis').prop('disabled', true);
            $('.btn-group.bootstrap-select.bairro button').css({opacity: '0.2', cursor: 'default'});
            $('.btn-group.bootstrap-select.eas button').css({opacity: '0.2', cursor: 'default'});
            $('.btn-group.bootstrap-select.profissional button').css({opacity: '0.2', cursor: 'default'});
            $('.btn-group.bootstrap-select.easparavincular button').css({opacity: '1', cursor: 'pointer'});
            $('.btn-group.bootstrap-select.profissionalparavincular button').css({opacity: '1', cursor: 'pointer'});
        };

        $scope.limparfiltro = function () {
            location.reload();
        };

        $scope.checkchange = function () {
            if ($('#semvinculo').is(":checked")) {
                $('.btn-group.bootstrap-select.eas button').css({opacity: '0.2', cursor: 'default'});
                $('.btn-group.bootstrap-select.profissional button').css({opacity: '0.2', cursor: 'default'});
            } else {
                $('.btn-group.bootstrap-select.eas button').css({opacity: '1', cursor: 'pointer'});
                $('.btn-group.bootstrap-select.profissional button').css({opacity: '1', cursor: 'pointer'});
            }
        };

        $scope.vincular = function (codfamiliar, indexlista, check) {
            $scope.vincula = {};
            $scope.vincula.codfamiliar = codfamiliar;
            let familia = $scope.todasFamilias.find(function (f) {
                return f.coFamilia == codfamiliar;
            });
            $scope.vincula.arrPessoas = familia.arrPessoas;
            $scope.vincula.cocnsprofvisivel = ($scope.selectedProfissionalParaVincular === undefined) ? null : $scope.selectedProfissionalParaVincular.CO_CNS;
            $scope.vincula.coseqeas = $('#filtroEasParaVincular').val();

            var table = $('#datatable').DataTable();
            // $('input').attr('disabled', true);
            if ((($('#myselector' + indexlista + '').attr("value") == 'Desvincular'))) {
                $scope.vincula.coseqeas = '';
                $scope.vincula.cocnsprofvisivel = '';
                $scope.vincula.check = true;
                $http.post(URL + 'vinculo/vinculaPessoasPorFamilia', angular.toJson($scope.vincula)).then(
                    function (objResponse) {
                        curr_pos = {
                            'top': $(table.settings()[0].nScrollBody).scrollTop(),
                            'left': $(table.settings()[0].nScrollBody).scrollLeft()
                        };
                        table.cell(indexlista, 5).data('');
                        table.cell(indexlista, 8).data('');
                        // var rowNode = table.row('' + indexlista + '').draw().node();
                        $('#myselector' + indexlista + '').prop('value', 'Vincular');
                        $('#myselector' + indexlista + '').removeClass("btn-danger").addClass("btn-primary");

                        $(table.settings()[0].nScrollBody).scrollTop(curr_pos.top);
                        $(table.settings()[0].nScrollBody).scrollLeft(curr_pos.left);
                        //refresh na tabela e alteração da cor do row e do elemento da coluna de eas para show
                    },
                    function (error) {
                        bootbox.alert('Ocorreu um erro na desvinculação!');
                    }
                );
            } else {
                if ($scope.selection.easvisivelvincular == null) {
                    bootbox.alert('Selecione um EAS para vincular!');
                }
                else {
                    $scope.vincula.check = false;
                    $http.post(URL + 'vinculo/vinculaPessoasPorFamilia', angular.toJson($scope.vincula)).then(
                        function (objResponse) {
                            curr_pos = {
                                'top': $(table.settings()[0].nScrollBody).scrollTop(),
                                'left': $(table.settings()[0].nScrollBody).scrollLeft()
                            };
                            table.cell(indexlista, 5).data('<strong>' + $scope.selectedEasParaVincular.NO_EAS_VISIVEL + '</strong>');
                            if ($scope.selectedProfissionalParaVincular !== undefined) {
                                table.cell(indexlista, 8).data('<strong>' + $scope.selectedProfissionalParaVincular.NO_PROFISSIONAL + '</strong>');
                            }
                            else {
                                table.cell(indexlista, 8).data('');
                            }

                            $('#myselector' + indexlista + '').prop('value', 'Desvincular');
                            $('#myselector' + indexlista + '').removeClass("btn-primary").addClass("btn-danger");

                            $(table.settings()[0].nScrollBody).scrollTop(curr_pos.top);
                            $(table.settings()[0].nScrollBody).scrollLeft(curr_pos.left);
                        },
                        function (error) {
                            bootbox.alert('Ocorreu um erro na vinculação!');
                        }
                    );
                }
            }
        }
    }
    ]
);
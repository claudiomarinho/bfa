appPrincipal.controller('RelatorioConsolidadoCtrl',
    ['$scope', '$http', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window', '$templateCache',
        '$q', function ($scope, $http, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window, $templateCache, $q) {

        $scope.init = (coMunicipioIbge) => {
            $.fn.dataTable.ext.errMode = 'none';

            $scope.carregaRegiao();
            $scope.carregaEstados("BR");

            $scope.coMunicipioIbge = coMunicipioIbge;

            $scope.consultaDsei();
            $scope.listaRelatorioConsolidado();

            $scope.listaEasVisiveis();
            $scope.listaBairros();
            $scope.selectedEstado = {};
            $scope.selectedMunicipio = {};

            $scope.carregaPrimeiraVez = true;

            $scope.dadosEas = [];

            $scope.selection = {};
            $scope.selecionouproffiltro = false;

            $scope.indice = 0;

            $scope.selection.tprelatorio = 'porRegiao';
            $scope.selection.varwhere = $('#filtroRegiao').val();
            $scope.todasRegioes = true;
            $scope.todosEstados = true;

            $('#datatableDiv').hide();
        };

            $scope.consultaDsei = () => {
              HttpService.search('acompanhamento/consultaEstabelecimentoDsei', 'GET').then((res) => {
                  res.push({CO_DSEI: 1, NO_PESSOA_JURIDICA: "TODOS OS DSEI"});
                  $scope.listaDsei = res;
              });
          };

        $scope.carregaRegiao = () => {
            $scope.listarregiao = [
                {CO_REGIAO: "NO",  NO_REGIAO: "REGIÃO NORTE"},
                {CO_REGIAO: "NR",  NO_REGIAO: "REGIÃO NORDESTE"},
                {CO_REGIAO: "SU",  NO_REGIAO: "REGIÃO SUDESTE"},
                {CO_REGIAO: "SL",  NO_REGIAO: "REGIÃO SUL"},
                {CO_REGIAO: "CO",  NO_REGIAO: "REGIÃO CENTRO-OESTE"}
            ];
        }


        $scope.carregaEstados = ($noRegiao) => {
                $scope.estadosNorte = [
                {CO_UF_IBGE: 12, NO_UF: "AC"},
                {CO_UF_IBGE: 13, NO_UF: "AM"},
                {CO_UF_IBGE: 11, NO_UF: "RO"},
                {CO_UF_IBGE: 14, NO_UF: "RR"},
                {CO_UF_IBGE: 15, NO_UF: "PA"},
                {CO_UF_IBGE: 17, NO_UF: "TO"},
                {CO_UF_IBGE: 16, NO_UF: "AP"}
                ];
            $scope.estadosNordeste = [
                {CO_UF_IBGE: 21, NO_UF: "MA"},
                {CO_UF_IBGE: 22, NO_UF: "PI"},
                {CO_UF_IBGE: 23, NO_UF: "CE"},
                {CO_UF_IBGE: 29, NO_UF: "BA"},
                {CO_UF_IBGE: 24, NO_UF: "RN"},
                {CO_UF_IBGE: 25, NO_UF: "PB"},
                {CO_UF_IBGE: 26, NO_UF: "PE"},
                {CO_UF_IBGE: 27, NO_UF: "AL"},
                {CO_UF_IBGE: 28, NO_UF: "SE"}
                ];
            $scope.estadosSudeste = [
                {CO_UF_IBGE: 35, NO_UF: "SP"},
                {CO_UF_IBGE: 33, NO_UF: "RJ"},
                {CO_UF_IBGE: 32, NO_UF: "ES"},
                {CO_UF_IBGE: 31, NO_UF: "MG"}
                ];
            $scope.estadosCentroOeste = [
                {CO_UF_IBGE: 53, NO_UF: "DF"},
                {CO_UF_IBGE: 52, NO_UF: "GO"},
                {CO_UF_IBGE: 50, NO_UF: "MS"},
                {CO_UF_IBGE: 51, NO_UF: "MT"}
                ];

            $scope.estadosSul = [
                {CO_UF_IBGE: 41, NO_UF: "PR"},
                {CO_UF_IBGE: 42, NO_UF: "SC"},
                {CO_UF_IBGE: 43, NO_UF: "RS"}
            ];

           if ($noRegiao == null) {
               $scope.listarestado = [...new Set([...$scope.estadosNorte ,...$scope.estadosSul,...$scope.estadosNordeste,
                   ...$scope.estadosCentroOeste,...$scope.estadosSudeste])];
               $scope.todasRegioes = true;
           }
            else if ($noRegiao == "CO") {
               $scope.listarestado = $scope.estadosCentroOeste;
               $scope.todasRegioes = false;
           }
           else if ($noRegiao == "NO") {
               $scope.listarestado = $scope.estadosNorte;
               $scope.todasRegioes = false;
           }
           else if ($noRegiao == "NR") {
               $scope.listarestado = $scope.estadosNordeste;
               $scope.todasRegioes = false;
           }
           else if ($noRegiao == "SU") {
               $scope.listarestado = $scope.estadosSudeste;
               $scope.todasRegioes = false;
           }
           else if ($noRegiao == "SL") {
               $scope.listarestado = $scope.estadosSul;
               $scope.todasRegioes = false;
           }
        };


        $scope.carregaMunicipios = ($coUfIbge) => {
            if ($('#filtroEstado').val()==''){$scope.todosEstados = true;$scope.carregaEstados("BR");}else{$scope.todosEstados = false;}
            HttpService.search('welcome/carregarMunicipio/' + $('#filtroEstado').val(), 'GET').then((res) => {
                $scope.listarmunicipios = res;
                $scope.$applyAsync(function() {
                    $('#filtroMunicipio').selectpicker('refresh');
                    $('#filtroMunicipio').selectpicker('render');
                });
            });
        };

        $scope.listaBairros = function () {
            $http.get(URL + 'bairro/vinculados/'+$scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listarbairros = objResponse.data;
                    $scope.$applyAsync(function() {
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
            $http.get(URL + 'vinculo/listaEasVisiveis/'+$scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listareasvisiveis = objResponse.data;
                    $scope.$applyAsync(function() {
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

        $scope.listarProfissionaisEasVisiveisFiltro = function(eas){
            $scope.listaprofissionais = $scope.listaProfissionaisEasVisiveisFiltro(eas);
        };

        $scope.listaProfissionaisEasVisiveisFiltro = function (eas) {
            var eascocnes='';
            if (eas) {var eascocnes = eas.CO_CNES; $scope.selection.noeasvisivelfiltro = eas.NO_EAS_VISIVEL;}
            $http.get(URL + 'vinculo/consultaProfissionaisEasVisiveis/'+eascocnes).then(
                function (objResponse) {
                    $scope.listaprofissionaisfiltro = objResponse.data;
                    $scope.$applyAsync(function() {
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

        function delay(ms) {
            var cur_d = new Date();
            var cur_ticks = cur_d.getTime();
            var ms_passed = 0;
            while(ms_passed < ms) {
                var d = new Date();  // Possible memory leak?
                var ticks = d.getTime();
                ms_passed = ticks - cur_ticks;
                // d = null;  // Prevent memory leak?
            }
        }

        $scope.selecionaProfissionalFiltro = function(profissional){
            if (profissional) {
                $scope.selecionouproffiltro = true;
                $scope.selection.cocnsprofvisivelfiltro = profissional.CO_CNS;
                $scope.selection.noprofvisivelfiltro = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelfiltro = null;
                $scope.selection.noprofvisivelfiltro = '';}
        };

        $scope.selecionaProfissionalVincular = function(profissional){
            if (profissional) {
                $scope.selection.cocnsprofvisivelvincular = profissional.CO_CNS;
                $scope.selection.noprofvisivelvincular = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelvincular = null;
                $scope.selection.noprofvisivelfiltro = ''; }

            if (profissional != null){
                $scope.alertSelectProfissional=false;
            }else {
                if ($scope.selectedEasParaVincular != null) {
                    $scope.alertSelectProfissional = true;
                }
            }
        };

        $scope.dtInstanceCallback = (_dtInstance) => {
            $scope.dtInstance = _dtInstance;
        };


        $scope.listaRelatorioConsolidado = function()  {
            $scope.dtColumns = [];
            let dtColumns = [
                DTColumnBuilder.newColumn('REGIAO').withTitle('<div><div class=textH>Região</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('NO_UF').withTitle('<div><div class=textH>Estado</div></div>').withClass('rotate3').withOption('width', '20px'),
                DTColumnBuilder.newColumn('IBGE').withTitle('<div><div class=textH>IBGE</div></div>').withClass('rotate4').withOption('width', '40px'),
                DTColumnBuilder.newColumn('NO_MUNICIPIO').withTitle('<div><div class=textH>Município</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('NO_PESSOA_JURIDICA').withTitle('<div><div class=textH>DSEI</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('CO_CNES').withTitle('<div><div class=textH>CNES</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('NO_EAS_VISIVEL').withTitle('<div><div class=textH>Nome do EAS</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('QTD_TOTAL_ACOMPANHAMENTOS').withTitle('<div><div class=textH>Ficha de acompanhamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEFICIARIOS_ACOMPANHADOS').withTitle('<div><div class=textH>Beneficiário acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEFICIARIOS_VINCULADOS').withTitle('<div><div class=textH>Beneficiário vinculado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_ACOMP_OBRIGATORIO').withTitle('<div><div class=textH>Acompanhamento obrigatório</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Obrigatório a ser acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_OBR_ACOMP').withTitle('<div><div class=textH>Obrigatório acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_ACOMP_NAO_OBRIGAT').withTitle('<div><div class=textH>Acomp. não obrigatório</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_N_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Não obrigatório a ser <br/>acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_N_OBR_ACOMP').withTitle('<div><div class=textH>Não obrigatório acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_CRIAN_A_SEREM_ACOMP').withTitle('<div><div class=textH>Criança a ser acompanhada</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_CRIAN_ACOMP').withTitle('<div><div class=textH>Criança acompanhada</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIANCA_VACINACAO_EM_DIA').withTitle('<div><div class=textH>Vacinação em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE').withTitle('<div><div class=textH>Gestante</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE_PRE_NATAL_EM_DIA').withTitle('<div><div class=textH>Gestante: pré natal em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE_DADOS_NUTRIC').withTitle('<div><div class=textH>Gestante: dados nutricionais</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_INDIG_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Indígena: obrigatório a ser<br/> acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_INDIG_OBR_ACOMP').withTitle('<div><div class=textH>Indígena: obrigatório<br/> acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_INDIG_N_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Indígena: não obrigatório <br/>a ser acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_INDIG_N_OBR_ACOMP').withTitle('<div><div class=textH>Indígena: não obrigatório<br/> acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_QUILOM_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Quilombola: obrigatório <br/>a ser acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_QUILOM_OBR_ACOMP').withTitle('<div><div class=textH>Quilombola: obrigatório<br/>acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_QUILOM_N_OBR_A_SEREM_ACOMP').withTitle('<div><div class=textH>Quilombola: não obrigatório<br/>a ser acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_QUILOM_N_OBR_ACOMP').withTitle('<div><div class=textH>Quilombola: não obrigatório<br/>acompanhado</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEF_NAO_ACOMPANHADO').withTitle('<div><div class=textH>Não acompanhados</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BEN_N_ACOMP_MOT_AUS').withTitle('<div><div class=textH>Não acompanhado<br/>com motivo ausente</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BEN_N_ACOMP_MOT_N_RESIDE').withTitle('<div><div class=textH>Não acompanhado<br/>com motivo não reside</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BEN_N_ACOMP_MOT_MUDOU').withTitle('<div><div class=textH>Não acompanhado<br/>com motivo mudou-se</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BEN_N_ACOMP_MOT_FALEC').withTitle('<div><div class=textH>Não acompanhado<br/>com motivo falecido</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BEN_N_ACOMP_MOT_END_INCOR').withTitle('<div><div class=textH>Não acompanhado<br/>com motivo end. incorreto</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_COND_IMPEDEM').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por condições que impedem</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_IMPEDE_ACESS').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por acesso impedido</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_HORARIO').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por horário</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_RESP_NAO_CUM').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por resp. que não cumpre</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_NAO_COLETA').withTitle('<div><div class=textH>Descumprimento nutricional<br/>porque não coletou</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_FALTA_EQUIP').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por faltar equipamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_FALTA_PROF').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por faltar profissional</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_RESP_N_COMP').withTitle('<div><div class=textH>Descumprimento nutricional<br/>pelo resp. não comprir</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_RECUSA_ACOMP').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por recusar acompanhamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_RISCO_SOC').withTitle('<div><div class=textH>Descumprimento nutricional<br/>por risco social</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_NUTRI_DESC_FORA_PROG').withTitle('<div><div class=textH>Descumprimento nutricional<br/>pelo programa fora do ar</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_COND_IMPEDEM').withTitle('<div><div class=textH>Descumprimento vacina<br/>condições impedem</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_IMPEDE_ACESS').withTitle('<div><div class=textH>Descumprimento vacina<br/>por acesso impedido</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_HORARIO').withTitle('<div><div class=textH>Descumprimento vacina<br/>por horário</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_RESP_NAO_CUM').withTitle('<div><div class=textH>Descumprimento vacina<br/>por resp. que não cumpre</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_NAO_COLETA').withTitle('<div><div class=textH>Descumprimento vacina<br/>porque não coletou</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_FALTA_EQUIP').withTitle('<div><div class=textH>Descumprimento vacina<br/>por faltar equipamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_FALTA_PROF').withTitle('<div><div class=textH>Descumprimento vacina<br/>por faltar profissional</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_RESP_N_COMP').withTitle('<div><div class=textH>Descumprimento vacina<br/>pelo resp. não comprir</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_RECUSA_ACOMP').withTitle('<div><div class=textH>Descumprimento vacina<br/>por recusar acompanhamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_RISCO_SOC').withTitle('<div><div class=textH>Descumprimento vacina<br/>por risco social</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_FORA_PROG').withTitle('<div><div class=textH>Descumprimento vacina<br/>pelo programa fora do ar</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_COND_ESPEC').withTitle('<div><div class=textH>Descumprimento vacina<br/>por condições especiais</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_VACI_DESC_FALTA_VACI').withTitle('<div><div class=textH>Descumprimento vacina<br/>por faltar vacina</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_COND_IMPEDEM').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por condições que impedem</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_IMPEDE_ACESS').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por acesso impedido</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_HORARIO').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por horário</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_RESP_NAO_CUM').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por resp. não cumprir</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_NAO_COLETA').withTitle('<div><div class=textH>Descumprimento prenatal<br/>porque não coletou</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_FALTA_EQUIP').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por faltar equipamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_FALTA_PROF').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por faltar profissional</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_RESP_N_COMP').withTitle('<div><div class=textH>Descumprimento prenatal<br/>pelo resp. não comprir</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_RECUSA_ACOMP').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por recusar acompanhamento</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_RISCO_SOC').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por risco social</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_FORA_PROG').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por programa fora do ar</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_PRENAT_DESC_FALTA_SERV').withTitle('<div><div class=textH>Descumprimento prenatal<br/>por faltar serviço</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_BENEC_IMP_ESUS').withTitle('<div><div class=textH>Importados do ESUS-AB</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_BEN_IMP_ESUS').withTitle('<div><div class=textH>Cobertura de importados do<br/>ESUS-AB(%)</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE_IMP_ESUS').withTitle('<div><div class=textH>Gestante importada do<br/>ESUS-AB</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_GESTANTE_IMP_ESUS').withTitle('<div><div class=textH>Cobertura de gestante do<br/>ESUS-AB(%)</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIANCA_IMP_ESUS').withTitle('<div><div class=textH>Criança importada do<br/>ESUS-AB</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_CRIANCA_IMP_ESUS').withTitle('<div><div class=textH>Cobertura de criança do<br/>ESUS-AB(%)</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE_IMP_SISPRENATAL').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_GESTANTE_IMP_SISPRENATAL').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GEST_IMP_SISPR_PRE_EM_DIA').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL com pré em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_GEST_IMP_SISPR_PRE_EM_DIA').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL com pré em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GEST_IMP_SISPR_DADOS_NUTRI').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL com dados nutri</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_GEST_IMP_SISPR_DADOS_NUTRI').withTitle('<div><div class=textH>Gestante importada do<br/>SISPRENATAL com dados nutri</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIAN_QUIL_A_SER_ACOMP').withTitle('<div><div class=textH>Criança quilombola<br/>a acompanhar</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIAN_QUIL_ACOMP').withTitle('<div><div class=textH>Criança quilombola<br/>acompanhada</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIAN_QUIL_VAC_EM_DIA').withTitle('<div><div class=textH>Criança quilombola<br/>vacina em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_CRIAN_QUIL_DAD_NUTRIC').withTitle('<div><div class=textH>Criança quilombola<br/>nutricional em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GESTANTE_QUILOMBOLA').withTitle('<div><div class=textH>Gestante quilombola</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GEST_QUIL_PRE_EM_DIA').withTitle('<div><div class=textH>Gestante quilombola<br/>pré natal em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('QTD_GEST_QUIL_NUTRI_EM_DIA').withTitle('<div><div class=textH>Gestante quilombola<br/>nutricional em dia</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_QUILOM_OBRIGATORIO').withTitle('<div><div class=textH>Cobertura quilombola<br/>obrigatórios(%)</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_QUILOM_N_OBRIGATORIO').withTitle('<div><div class=textH>Cobertura quilombola<br/>não obrigatórios(%)</div></div>').withClass('rotate').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERC_CRIAN_QUILOM_ACOMP').withTitle('<div><div class=textH>Cobertura criança<br/>quilombola(%)</div></div>').withClass('rotate').withOption('width', '20px')
            ];

            let createdRow = (row) => {
                $compile(angular.element(row).contents())($scope);
            };

            var getData = function () {
                $scope.selection.vigencia = $('#filtroVigencia').val();
                $scope.selection.nouf = '';
                $scope.selection.nomunicipio = '';
                $scope.selection.comunicipioibge = '';
                $scope.selection.publico = $('#filtroPublicoVisualizar').val();

                if ($scope.filtroEspecificoConsolidado != undefined) {
                    switch ($scope.filtroEspecificoConsolidado) {
                        case 'consolidadomotdescumprimento':
                            $scope.configColunasRelatorioConsolidadoMotDescumprimento();
                            break;
                        case 'consolidadoinformacoesesus':
                            $scope.configColunasRelatorioConsolidadoInformacoesEsus();
                            break;
                        case 'consolidadoinformacoesgestantes':
                            $scope.configColunasRelatorioConsolidadoInformacoesGestantes();
                            break;
                        case 'consolidadocondicionalidadesdesaude':
                            $scope.configColunasRelatorioCompleto();
                            break;
                        case 'consolidadocoberturaquilombola':
                            $scope.configColunasRelatorioConsolidadoCoberturaQuilombola();
                            break;

                        default:
                            $scope.configColunasRelatorioCompleto();
                    }
                }

                if ($scope.carregaPrimeiraVez){
                    $scope.carregaPrimeiraVez=false;
                    $scope.selection.tprelatorio = 'null';
                    let j=0;
                    let j_controle=0;
                    var string = '<div class="row"> <div class="col-sm-4 col-xs-12"> <div data-toggle="buttons">';
                    for(var i=0; i<dtColumns.length; i++) {
                        if (j_controle == 6){j_controle=0;string +='</div></div><div class="col-sm-4 col-xs-12"> <div data-toggle="buttons">';}
                        string += '<label class="btn btn-block btn-success">' +
                            '<input class="btn2" type="checkbox" name="'+i+'" checked="checked" autocomplete="off">'+dtColumns[i].sTitle+'</label>';
                        //   $('#leoharley').html(i+'<button id="voltar" name="voltar" class="btn btn-primary btn-sm">'+this.header().innerHTML+'</button>');

                        j++;
                        j_controle++;
                    }
                    $('#personalizarFiltros').html(string);
                }

                console.log($scope.selection.publico);

                let retorno = HttpService.search('relatorio/geraRelatorioConsolidado', 'POST', angular.toJson($scope.selection));

                retorno
                    .then((r)=>{
                        if (r.data != undefined) {$scope.tamanholista = (r.data.length);}
                    })
                    .catch(function(r) {
                        console.debug("Erro: " + r.data);
                    });

                return retorno;

            };

            $scope.dtOptions = DTOptionsBuilder.fromFnPromise(getData)
                .withOption('paging', false)
                .withButtons([
                    {extend: 'colvis', text: '<i class="fa fa-columns" aria-hidden="true"></i>'},
                    {extend: 'copy', text: '<i class="fa fa-clipboard" aria-hidden="true"></i>'},
                    {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i>'},
                    {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i>'}
                ])
                .withBootstrap()
                .withOption('scrollX', true)
                .withDataProp('data')


            $scope.dtColumns = dtColumns;

            $scope.dtOptions.withOption('createdRow', createdRow);
            if ($scope.dtInstance !== undefined) {
                $scope.dtInstance._renderer.reloadData();
            }

        };

        $scope.gerarRelatorio = function (){
            $("#datatableDiv").css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},800);
            $('#datatableDiv').show();

            $scope.dtInstance._renderer.reloadData();
        }


        $scope.configTpRelatorio = function (){
                $scope.selection.tprelatorio = 'porRegiao';
                $scope.selection.varwhere = $('#filtroRegiao').val();

            if ($('#filtroRegiao').val()!='') {
                $scope.configColunasRelatorioPorRegiao();
                $scope.selection.tprelatorio = 'porRegiao';
                $scope.selection.varwhere = $('#filtroRegiao').val();

                if ($('#filtroEstado').val()!='') {
                    $scope.selection.nouf = $scope.selectedEstado.NO_UF;
                    $scope.configColunasRelatorioPorEstado();
                    $scope.selection.tprelatorio = 'porEstado';
                    $scope.selection.varwhere = $('#filtroEstado').val();

                    if ($('#filtroMunicipio').val()!='') {
                        $scope.selection.nomunicipio = $scope.selectedMunicipio.NO_MUNICIPIO;
                        $scope.selection.comunicipioibge = $scope.selectedMunicipio.CO_MUNICIPIO_IBGE;
                        $scope.configColunasRelatorioPorMunicipio();
                        $scope.selection.tprelatorio = 'porMunicipio';
                        $scope.selection.varwhere = $('#filtroMunicipio').val();
                    }
                }
            }
                if ($('#filtroDsei').val()!='') {
                    $scope.configColunasRelatorioPorDsei();
                    $scope.selection.tprelatorio = 'porDsei';
                    $scope.selection.varwhere = $('#filtroDsei').val();
                }

                if ($('#filtroEas').val()!='') {
                    $scope.configColunasRelatorioPorEas();
                    $scope.selection.tprelatorio = 'porEas';
                    $scope.selection.varwhere = $('#filtroEas').val();
                }
        }


        $scope.configColunasRelatorioPorRegiao = function (){
                $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
                $('#datatable').DataTable().columns( [0] ).visible( true, true);
        }

        $scope.configColunasRelatorioPorEstado = function (){

                $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
                $('#datatable').DataTable().columns( [1] ).visible( true, true);

        }

        $scope.configColunasRelatorioPorMunicipio = function (){

                $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
                $('#datatable').DataTable().columns( [1,2,3] ).visible( true, true);

        }

        $scope.configColunasRelatorioPorDsei = function (){

                $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
                $('#datatable').DataTable().columns( [4] ).visible( true, true);
        }

        $scope.configColunasRelatorioPorEas = function (){
                $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
                $('#datatable').DataTable().columns( [5,6] ).visible( true, true);
        }

        $scope.configColunasRelatorioCompleto = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //aparece só as que preciso
            $scope.configColunasRelatorioPorRegiao();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [7,8,9,10,11,12,13,14,15] ).visible( true, true); //aparece só as que preciso
        }

        $scope.configColunasRelatorioConsolidadoMotDescumprimento = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorRegiao();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71] ).visible( true, true); //aparece só as que preciso
        }

        $scope.configColunasRelatorioConsolidadoInformacoesEsus = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorRegiao();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [72,73,74,75,76,77] ).visible( true, true); //aparece só as que preciso
        }

        $scope.configColunasRelatorioConsolidadoInformacoesGestantes = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorRegiao();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [78,79,80,81,82,83] ).visible( true, true); //aparece só as que preciso
        }


        $scope.configColunasRelatorioConsolidadoCoberturaQuilombola = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorRegiao();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [26,27,28,29,84,85,86,87,88,89,90,91,92,93] ).visible( true, true); //aparece só as que preciso
        }


        $scope.mudaFiltro = function (k){
            console.log(k);
            if (k=="1") {
                $('#datatableDiv').hide();
                $('#divFiltrosIndividualizados').hide();
                $("#divFiltrosConsolidados").css({visibility: "visible", opacity: 0.0}).animate({opacity: 1.0}, 800);
                $('#divFiltrosConsolidados').show();
            }
            if (k=="2") {
                $('#datatableDiv').hide();
                $('#divFiltrosConsolidados').hide();
                $("#divFiltrosIndividualizados").css({visibility: "visible", opacity: 0.0}).animate({opacity: 1.0}, 800);
                $('#divFiltrosIndividualizados').show();
            }
        }


        $scope.travaDestravaAposPesquisa = function (){
            $('#filtroBairro').prop('disabled', true);
            $('#semvinculo').prop('disabled', true);
            $('#filtroEas').prop('disabled', true);
            $('#filtroProfissional').prop('disabled', true);
            $('#filtroNis').prop('disabled', true);
            $('.btn-group.bootstrap-select.bairro button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.eas button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.profissional button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.easparavincular button').css({opacity: '1', cursor:'pointer'});
            $('.btn-group.bootstrap-select.profissionalparavincular button').css({opacity: '1', cursor:'pointer'});
        }


        $scope.limparfiltro = function (){
            location.reload();
        }



    }
    ]
);


appPrincipal.controller('RelatorioIndividualizadoCtrl',
    ['$scope', '$http', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$compile', '$window', '$templateCache',
        '$q', function ($scope, $http, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService, $compile, $window, $templateCache, $q) {

        $scope.init = (coMunicipioIbge) => {
            $.fn.dataTable.ext.errMode = 'none';

            $scope.coMunicipioIbge = coMunicipioIbge;

            $scope.listaRelatorioIndividualizado();
            $scope.listaEasVisiveis();
            $scope.listaBairros();

            $scope.carregaPrimeiraVez = true;
            $scope.dadosEas = [];

            $scope.selection = {};

            $scope.selecionouproffiltro = false;

            $scope.vincularAct = true;

            $scope.indice = 0;

            $scope.selection.tprelatorio = 'porRegiao';
            $scope.selection.varwhere = $('#filtroRegiao').val();

            $('#datatableDiv').hide();

        };



        $scope.listaBairros = function () {
            $http.get(URL + 'bairro/vinculados/'+$scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listarbairros = objResponse.data;
                    $scope.$applyAsync(function() {
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
            $http.get(URL + 'vinculo/listaEasVisiveis/'+$scope.coMunicipioIbge).then(
                function (objResponse) {
                    $scope.listareasvisiveis = objResponse.data;
                    $scope.$applyAsync(function() {
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

        $scope.listarProfissionaisEasVisiveisFiltro = function(eas){
            $scope.listaprofissionais = $scope.listaProfissionaisEasVisiveisFiltro(eas);
        };

        $scope.listaProfissionaisEasVisiveisFiltro = function (eas) {
            var eascocnes='';
            if (eas) {var eascocnes = eas.CO_CNES; $scope.selection.noeasvisivelfiltro = eas.NO_EAS_VISIVEL;}
            $http.get(URL + 'vinculo/consultaProfissionaisEasVisiveis/'+eascocnes).then(
                function (objResponse) {
                    $scope.listaprofissionaisfiltro = objResponse.data;
                    $scope.$applyAsync(function() {
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


        function delay(ms) {
            var cur_d = new Date();
            var cur_ticks = cur_d.getTime();
            var ms_passed = 0;
            while(ms_passed < ms) {
                var d = new Date();  // Possible memory leak?
                var ticks = d.getTime();
                ms_passed = ticks - cur_ticks;
                // d = null;  // Prevent memory leak?
            }
        }

        $scope.selecionaProfissionalFiltro = function(profissional){
            if (profissional) {
                $scope.selecionouproffiltro = true;
                $scope.selection.cocnsprofvisivelfiltro = profissional.CO_CNS;
                $scope.selection.noprofvisivelfiltro = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelfiltro = null;
                $scope.selection.noprofvisivelfiltro = '';}
        };

        $scope.selecionaProfissionalVincular = function(profissional){
            if (profissional) {
                $scope.selection.cocnsprofvisivelvincular = profissional.CO_CNS;
                $scope.selection.noprofvisivelvincular = profissional.NO_PROFISSIONAL;
            } else {
                $scope.selection.cocnsprofvisivelvincular = null;
                $scope.selection.noprofvisivelfiltro = ''; }

            if (profissional != null){
                $scope.alertSelectProfissional=false;
            }else {
                if ($scope.selectedEasParaVincular != null) {
                    $scope.alertSelectProfissional = true;
                }
            }
        };

        $scope.dtInstanceCallback = (_dtInstance) => {
            $scope.dtInstance = _dtInstance;
        };


        $scope.listaRelatorioIndividualizado = function()  {
            $scope.dtColumns = [];
            let dtColumns = [
                DTColumnBuilder.newColumn('NIS').withTitle('<div><div class=textH>NIS</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('NOME').withTitle('<div><div class=textH>Nome</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('PERFIL').withTitle('<div><div class=textH>Perfil</div></div>').withClass('rotate2').withOption('width', '40px'),
                DTColumnBuilder.newColumn('STATUSDESCUMPRIMENTO').withTitle('<div><div class=textH>Descump.</div></div>').withClass('rotate2').withOption('width', '40px'),
                DTColumnBuilder.newColumn('DT_NASCIMENTO').withTitle('<div><div class=textH>Dt. de nasc.</div></div>').withClass('rotate2').withOption('width', '40px'),
                DTColumnBuilder.newColumn('IDADE').withTitle('<div><div class=textH>Idade</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('ENDERECO').withTitle('<div><div class=textH>Endereço</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('BAIRRO').withTitle('<div><div class=textH>Bairro</div></div>').withClass('rotate2').withOption('width', '60px'),
                DTColumnBuilder.newColumn('DATADOACOMP').withTitle('<div><div class=textH>Dt. do acomp.</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('DUM').withTitle('<div><div class=textH>DUM</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('CNESEASDEACOMPANHAMENTO').withTitle('<div><div class=textH>CNES da EAS de<br/>acomp.</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('NOPROFDEACOMPANHAMENTO').withTitle('<div><div class=textH>Nome do prof. de<br/> acomp.</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('STATUSGESTANTE').withTitle('<div><div class=textH>Situação gestante</div></div>').withClass('rotate2').withOption('width', '40px'),
                DTColumnBuilder.newColumn('STATUSSISPRENATAL').withTitle('<div><div class=textH>SISPRENATAL</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('STATUSIMPDEOUTROSSIST').withTitle('<div><div class=textH>Acompanhamentos import.<br/>de outro sistema</div></div>').withClass('rotate2').withOption('width', '20px'),
                DTColumnBuilder.newColumn('MOTIVODESCUMPRIMENTO').withTitle('<div><div class=textH>Motivo do descump.</div></div>').withClass('rotate2').withOption('width', '40px')
            ];

            let createdRow = (row) => {
                $compile(angular.element(row).contents())($scope);
            };

            var getData = function () {
                $scope.selection.vigencia = $('#filtroVigencia').val();

                $scope.selection.tprelatorio = 'porNis';
                $scope.selection.varwhere = $('#filtroNis').val();

                if ($scope.filtroEspecificoIndividualizado != undefined) {
                    switch ($scope.filtroEspecificoIndividualizado) {
                        case 'individualizadoacompporeas':
                            $scope.configColunasRelatorioIndividualizadoAcompPorEas();
                            break;
                        case 'individualizadoacompdegestante':
                            $scope.configColunasRelatorioIndividualizadoAcompdeGestante();
                            break;
                        case 'individualizadomotivodedescump':
                            $scope.configColunasRelatorioIndividualizadoMotivoDeDescump();
                            break;
                        default:
                            $scope.configColunasRelatorioCompleto();
                    }
                }


                if ($scope.carregaPrimeiraVez){
                    $scope.carregaPrimeiraVez=false;
                    $scope.selection.tprelatorio = 'null';
                    let j=0;
                    let j_controle=0;
                    var string = '<div class="row"> <div class="col-sm-4 col-xs-12"> <div data-toggle="buttons">';
                    for(var i=0; i<dtColumns.length; i++) {
                        if (j_controle == 6){j_controle=0;string +='</div></div><div class="col-sm-4 col-xs-12"> <div data-toggle="buttons">';}
                        string += '<label class="btn btn-block btn-success">' +
                            '<input class="btn2" type="checkbox" name="'+i+'" checked="checked" autocomplete="off">'+dtColumns[i].sTitle+'</label>';
                        //   $('#leoharley').html(i+'<button id="voltar" name="voltar" class="btn btn-primary btn-sm">'+this.header().innerHTML+'</button>');

                        j++;
                        j_controle++;
                    }
                    $('#personalizarFiltros').html(string);
                    }

                console.log('olha ai'+$("input[name='tpFiltroEspecifico']:checked"). val());

                let retorno = HttpService.search('relatorio/geraRelatorioIndividualizado', 'POST', angular.toJson($scope.selection));

                retorno
                    .then((r)=>{
                        if (r.data != undefined) {$scope.tamanholista = (r.data.length);}
                    })
                    .catch(function(r) {
                        console.debug("Erro: " + r.data);
                    });

                return retorno;

            };

            $scope.dtOptions = DTOptionsBuilder.fromFnPromise(getData)
                .withOption('paging', false)
                .withButtons([
                    {extend: 'colvis', text: '<i class="fa fa-columns" aria-hidden="true"></i>'},
                    {extend: 'copy', text: '<i class="fa fa-clipboard" aria-hidden="true"></i>'},
                    {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i>'},
                    {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i>'}
                ])
                .withBootstrap()
                .withOption('scrollX', true)
                .withDataProp('data')

            $scope.dtColumns = dtColumns;

            $scope.dtOptions.withOption('createdRow', createdRow);
            if ($scope.dtInstance !== undefined) {
                $scope.dtInstance._renderer.reloadData();
            }

        };

        $scope.gerarRelatorio = function (){
            $("#datatableDiv").css({visibility:"visible", opacity: 0.0}).animate({opacity: 1.0},800);
            $('#datatableDiv').show();

            $scope.dtInstance._renderer.reloadData();
        }


        $scope.configTpRelatorio = function (){
            $scope.selection.tprelatorio = 'porNis';
            $scope.selection.varwhere = $('#filtroNis').val();

            if ($('#filtroEas').val()!='') {
                $scope.configColunasRelatorioPorEas();
                $scope.selection.tprelatorio = 'porEas';
                $scope.selection.varwhere = $('#filtroEas').val();
                if ($("input[name='tpFiltroEspecifico']:checked"). val() == 'individualizadoacompdegestante') {$scope.selection.tprelatorio = 'porEasGestante';}
            }

            if ($('#filtroBairro').val()!='') {
                $scope.configColunasRelatorioPorBairro();
                $scope.selection.tprelatorio = 'porBairro';
                $scope.selection.varwhere = $('#filtroBairro').val();
                if ($("input[name='tpFiltroEspecifico']:checked"). val() == 'individualizadoacompdegestante') {$scope.selection.tprelatorio = 'porBairroGestante';}
            }

            if ($('#filtroNis').val()!='') {
                $scope.configColunasRelatorioPorNis();
                $scope.selection.tprelatorio = 'porNis';
                $scope.selection.varwhere = $('#filtroNis').val();
                if ($("input[name='tpFiltroEspecifico']:checked"). val() == 'individualizadoacompdegestante') {$scope.selection.tprelatorio = 'porNisGestante';}
            }


        }

        $scope.configColunasRelatorioCompleto = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( true, true); //aparece só as que preciso
        }

        $scope.configColunasRelatorioPorNis = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
            $('#datatable').DataTable().columns( [0] ).visible( true, true);
        }

        $scope.configColunasRelatorioPorBairro = function (){

            $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
            $('#datatable').DataTable().columns( [7] ).visible( true, true);

        }

        $scope.configColunasRelatorioPorEas = function (){

            $('#datatable').DataTable().columns( ['*'] ).visible( false, false);
            $('#datatable').DataTable().columns( [10,11] ).visible( true, true);

        }

        $scope.configColunasRelatorioIndividualizadoAcompPorEas = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorNis();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [1,2,3,4,5,12,6,7,10,11,14] ).visible( true, true); //aparece só as que preciso
        }

        $scope.configColunasRelatorioIndividualizadoAcompdeGestante = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorNis();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [1,4,5,6,7,8,9,10,13] ).visible( true, true); //aparece só as que preciso
        }


        $scope.configColunasRelatorioIndividualizadoMotivoDeDescump = function (){
            $('#datatable').DataTable().columns( ['*'] ).visible( false, false); //esconde todas as colunas
            $scope.configColunasRelatorioPorNis();
            $scope.configTpRelatorio();
            $('#datatable').DataTable().columns( [1,6,7,10,15] ).visible( true, true); //aparece só as que preciso
        }


        $scope.travaDestravaAposPesquisa = function (){
            $('#filtroBairro').prop('disabled', true);
            $('#semvinculo').prop('disabled', true);
            $('#filtroEas').prop('disabled', true);
            $('#filtroProfissional').prop('disabled', true);
            $('#filtroNis').prop('disabled', true);
            $('.btn-group.bootstrap-select.bairro button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.eas button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.profissional button').css({opacity: '0.2', cursor:'default'});
            $('.btn-group.bootstrap-select.easparavincular button').css({opacity: '1', cursor:'pointer'});
            $('.btn-group.bootstrap-select.profissionalparavincular button').css({opacity: '1', cursor:'pointer'});
        }


        $scope.limparfiltro = function (){
            location.reload();
        }



    }
    ]
);
appPrincipal.controller('IndicadoresCtrl',
    ['$scope', 'cfpLoadingBar', 'DTOptionsBuilder', 'DTColumnBuilder', 'HttpService', '$rootScope',  "$http", "$window",
        ($scope, cfpLoadingBar, DTOptionsBuilder, DTColumnBuilder, HttpService,$rootScope,  $http, $window) => {
            $scope.allowClear = true;
            $scope.init = () => {
                //ABA 1 - beneficiários obrigatórios/não obrigatórios
                $scope.consultarGraficoBeneficiarios();
            };

            $scope.consultarGraficoBeneficiarios = () => {
                HttpService.search('Welcome/montaGraficoBeneficiariosMunicipio', 'GET').then((res) => {
                    $scope.graficoBeneficiarios(res.GRAFICO1, res.GRAFICO2, res.GRAFICO3, res.GRAFICO4, res.GRAFICO5, res.GRAFICO6, res.GRAFICO7)
                });
            };

            $scope.voltar = () => {
                $window.location.href = "relatorio";
            };

            $scope.graficoBeneficiarios = (grafico1, grafico2, grafico3, grafico4, grafico5, grafico6, grafico7) => {

                var d = new Date();
                if (d.getMonth() < 6) {
                    vigencia = '1ª Vigencia de '+d.getFullYear();
                } else {
                    vigencia = '2ª Vigencia de '+d.getFullYear();
                }

                Highcharts.setOptions({
                    lang: {
                        months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                        shortMonths: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                        weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                        loading: ['Atualizando o gráfico...aguarde'],
                        drillUpText: 'Voltar aos gráficos',
                        drillupButtonTitle: '',
                        contextButtonTitle: 'Exportar gráfico',
                        decimalPoint: ',',
                        thousandsSep: '.',
                        downloadJPEG: 'Baixar imagem JPEG',
                        downloadPDF: 'Baixar arquivo PDF',
                        downloadPNG: 'Baixar imagem PNG',
                        downloadSVG: 'Baixar vetor SVG',
                        printChart: 'Imprimir gráfico',
                        rangeSelectorFrom: 'De',
                        rangeSelectorTo: 'Para',
                        rangeSelectorZoom: 'Zoom',
                        resetZoom: 'Limpar Zoom',
                        resetZoomTitle: 'Voltar Zoom para nível 1:1',
                    }
                });

                Highcharts.chart('obrigatorios', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Relatório Municipal <strong>'+ vigencia +'</strong>'
                    },
                    subtitle: {
                        text: 'Clique nas Colunas para visualizar detalhadamente.'
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'Total de Beneficiários'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y}'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">Total de</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
                    },

                    "series": [
                        {
                            "name": "Tipos de Acompanhamentos",
                            "colorByPoint": true,
                            "data": grafico1
                        }
                    ],
                    "drilldown": {
                        "series": [
                            {
                                "name": "Beneficiarios",
                                "id": "Beneficiarios",
                                "data": grafico2
                            },
                            {
                                "name": "Beneficiarios2",
                                "id": "Beneficiarios2",
                                "data": grafico3
                            },
                            {
                                "name": "Gestantes",
                                "id": "Gestantes",
                                "data": grafico4
                            },
                            {
                                "name": "Outros",
                                "id": "Outros",
                                "data": grafico5
                            },
                            {
                                "name": "Indigenas",
                                "id": "Indigenas",
                                "data": grafico6
                            },
                            {
                                "name": "Criancas",
                                "id": "Criancas",
                                "data": grafico7
                            }
                        ]
                    }
                });

            };
            
        }
    ]
);
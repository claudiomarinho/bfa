appPrincipal.directive("nxEqual", function () {
    return {
        require: "ngModel",
        link: function (scope, elem, attrs, model) {
            if (!attrs.nxEqual) {
                return;
            }
            scope.$watch(attrs.nxEqual, function (value) {
                model.$setValidity("nxEqual", value === model.$viewValue);
            });
            model.$parsers.push(function (value) {
                var isValid = value === scope.$eval(attrs.nxEqual);
                model.$setValidity("nxEqual", isValid);
                return isValid ? value : undefined;
            });
        }
    };
});
appPrincipal.directive('ngDropdownMultiselectDisabled', function() {
    return {
        restrict: 'A',
        controller: function($scope, $element, $attrs) {
            var $btn;
            $btn = $element.find('button');
            return $scope.$watch($attrs.ngDropdownMultiselectDisabled, function(newVal) {
                return $btn.attr('disabled', newVal);
            });
        }
    };
});
appPrincipal.directive("carregando", function (cfpLoadingBar) {
    return {
        restrict: "A",
        link: function (scope, element, attrs) {
            element.bind("click", function () {
                scope.$eval(attrs.carregando);
                cfpLoadingBar.start();
                cfpLoadingBar.inc();
                cfpLoadingBar.set(0.55);
            });
        }
    };
});

appPrincipal.directive('convertToNumber', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function (val) {
                return val ? parseInt(val, 10) : null;
            });
            ngModel.$formatters.push(function (val) {
                return val ? '' + val : null;
            });
        }
    };
});

appPrincipal.directive('datepicker', function () {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attrs, ngModelCtrl) {
            $(function () {
                let dtMin = attrs.dtmin.split('/');
                let dtMax = attrs.dtmax.split('/');
                let year = attrs.year == 'true' ? true : false;
                let month = attrs.month == 'true' ? true : false;
                let dateRange = "1930:2018";
                let destroy = attrs.destroy !== undefined ? true : false;

                element.on('click', () => {
                    if(destroy){
                        element.datepicker("destroy");
                    }
                    dtMin = attrs.dtmin.split('/');
                    dtMax = attrs.dtmax.split('/');
                    element.datepicker({
                        dateFormat: 'dd/mm/yy',
                        buttonImageOnly: true,
                        showAnim: "blind",
                        changeMonth: month,
                        changeYear: year,
                        yearRange: dateRange,
                        minDate: new Date(dtMin[2], dtMin[1] - 1, dtMin[0]),
                        maxDate: new Date(dtMax[2], dtMax[1] - 1, dtMax[0]),
                        onSelect: function (date) {
                            scope.$apply(function () {
                                ngModelCtrl.$setViewValue(date);
                            });
                        }
                    });
                    // element.datepicker('refresh');
                    element.datepicker("show");
                });
            });
        }
    }
});

appPrincipal.directive('ckeditor', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModel) {
            var editorOptions;
            editorOptions = {
                height: 300,
                toolbar: [
                    {name: 'basic', items: ['Bold', 'Italic', 'Underline']}
                ],
                removePlugins: 'elementspath',
                resize_enabled: false
            };

            // enable ckeditor
            var ckeditor = element.ckeditor(editorOptions);

            // update ngModel on change
            ckeditor.editor.on('change', function () {
                ngModel.$setViewValue(this.getData());
            });

            ckeditor.extraPlugins = 'wordcount,notification';

        }

    };
});



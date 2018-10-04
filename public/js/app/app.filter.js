appPrincipal.filter("startFrom", function() {
  return function(input, start) {
    if (input) {
      start = +start;
      return input.slice(start);
    }
    return [];
  };
});

appPrincipal.filter("num", function() {
  return function(input) {
    return parseInt(input);
  };
});

appPrincipal.filter("integer", function() {
  return function(num) {
    return parseInt(num);
  };
});

appPrincipal.filter("float", function() {
  return function(num) {
    if (num == undefined) {
      return 0;
    }
    var str = num;
    var res  = str.replace(",", ".");
    return parseFloat(res);
  };
});

appPrincipal.filter('getType', function() {
  return function(obj) {
    return typeof obj
  };
});

appPrincipal.filter('propsFilter', function() {
    return function(items, props) {
        var out = [];

        if (angular.isArray(items)) {
            items.forEach(function(item) {
                var itemMatches = false;

                var keys = Object.keys(props);
                for (var i = 0; i < keys.length; i++) {
                    var prop = keys[i];
                    var text = props[prop].toLowerCase();
                    if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                        itemMatches = true;
                        break;
                    }
                }

                if (itemMatches) {
                    out.push(item);
                }
            });
        } else {
            // Let the output be the input untouched
            out = items;
        }

        return out;
    };
});

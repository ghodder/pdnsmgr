var pdnsapp = angular.module('pdnsApp', [
   'ngRoute',
   'angular-loading-bar'
])
.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
			when('/', {
				templateUrl: '/views/home.html',
				controller: 'HomeController'
			}).
			when('/dns', {
				templateUrl: '/views/dnshome.html',
				controller: 'DnsController'
			}).
			when('/ipgeo', {
				templateUrl: '/views/ipgeohome.html',
				controller: 'IpgeoController'
			}).
			otherwise({
				redirectTo: '/'
			});
	}
])
.config(['$httpProvider',
	function($httpProvider) {
		$httpProvider.defaults.withCredentials = true;
	}
])
.factory('Data', function Data($http) {
	return {
		getDomains: function getDomains() { return $http.get('/domain'); },
		getDomain:  function getDomain(id) { return $http.get('/domain/' + id); },
		removeDomain: function removeDomain(id) { return $http.delete('/domain/' + id); }
	}
});


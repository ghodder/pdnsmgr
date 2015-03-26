var pdnsapp = angular.module('pdnsApp', [
   'ngRoute',
   'angular-loading-bar'
]);

pdnsapp.config(['$routeProvider',
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
			when('/domain', {
				templateUrl: '/views/domainhome.html',
				controller: 'DomainController'
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
]);

pdnsapp.factory('Data', function Data($http) {
	return 'Here is some data';
});

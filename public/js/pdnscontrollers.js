pdnsapp.controller('pdnsController',
	function pdnsController($scope, Data) {
		return 'PDNS Controller';
	}
);

pdnsapp.controller('DnsController',
        function HomeController($scope, Data) {
                return 'DNS controller';
        }
);

pdnsapp.controller('DomainController',
        function HomeController($scope, Data) {
                return 'Domain controller';
        }
);

pdnsapp.controller('HomeController',
        function HomeController($scope, Data) {
		function parseDomains(data) {
			$scope.domains = data;
		}

		$scope.newDomain = { domain: '' };

		Data.getDomains().success(parseDomains);
        }
);

pdnsapp.controller('IpgeoController',
        function IpgeoController($scope, Data) {
                return 'IPGeo controller';
        }
);

pdnsapp.controller('pdnsController',
	function pdnsController($scope, Data) {
		return 'PDNS Controller';
	}
);

pdnsapp.controller('DnsController',
        function DnsController($scope, Data) {
                return 'DNS controller';
        }
);

pdnsapp.controller('HomeController',
        function HomeController($scope, Data) {
		function parseDomains(data) {
			$scope.domains = data;
		}

		$scope.newDomain = { domain: '' };
		$scope.removeDomain = null;

		$scope.refreshDomains = function refreshDomains() {
			$scope.domains = null;
			Data.getDomains().success(parseDomains);
		}

		$scope.refreshDomains();

		function removeDomainSuccess(data) {
			var i = $scope.domains.length;

			while (i--) {
				console.log('removeDomainSuccess(): Checking ' + $scope.domains[i].domain);
				if ($scope.domains[i].id == $scope.removeDomain) {
					console.log('removeDomainSuccess(): Removing ' + $scope.domains[i].domain);
					$scope.domains.splice(i, 1);
					break;
				}
			}
		}

		function removeDomainError(data) {
			console.log('Error deleting domain: ' + data);
		}

                $scope.removeDomain = function removeDomain(id) {
			var i = $scope.domains.length;
		
			while (i--) {
				if ($scope.domains[i].id == id) {
               				if (confirm('Are you sure you wish to delete ' + $scope.domains[i].domain + '?')) {
						$scope.removeDomain = id;
						console.log('removeDomain(): Removing domain ' + $scope.domains[i].domain);
		                                Data.removeDomain(id).success(removeDomainSuccess).error(removeDomainError);
					}
				}
                        }
                }
        }
);

pdnsapp.controller('IpgeoController',
        function IpgeoController($scope, Data) {
                return 'IPGeo controller';
        }
);

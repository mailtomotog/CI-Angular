/* ------------------------------
 * 
 * ------------------------------
 */
var viewsPath = 'application/views/';

appModule

.config(function($routeProvider, $locationProvider){
	$locationProvider.html5Mode(true);
	//Define the custom routes
	$routeProvider
	.when('/home', {
		templateUrl: viewsPath+'home/index.php',
		controller: 'HomeController'
	})
	.otherwise({redirectTo: '/home'});
});
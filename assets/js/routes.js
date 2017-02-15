/* ------------------------------
 * 
 * ------------------------------
 */
var viewsPath = 'application/views/';

appModule

.config(function($routeProvider){

	//Define the custom routes
	$routeProvider
	.when('/home', {
		template: viewsPath+'home/index.php',
		controller: 'homeController'
	})
	.otherwise({
        template: viewsPath+'home/index.php',
		controller: 'homeController'
    });
});
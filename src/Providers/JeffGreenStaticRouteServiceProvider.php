<?php
namespace JeffGreenStatic\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class JeffGreenStaticRouteServiceProvider
 * @package JeffGreenStatic\Providers
 */
class JeffGreenStaticRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('', 'JeffGreenStatic\Controllers\ContentController@sayHello');
	}

}

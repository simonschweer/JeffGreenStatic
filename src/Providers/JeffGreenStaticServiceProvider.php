<?php
namespace JeffGreenStatic\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class JeffGreenStaticServiceProvider
 * @package JeffGreenStatic\Providers
 */
class JeffGreenStaticServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(JeffGreenStaticRouteServiceProvider::class);
	}
}

<?php
namespace JeffGreenStatic\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 * @package JeffGreenStatic\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function viewStart(Twig $twig):string
	{
		return $twig->render('JeffGreenStatic::content.viewStart');
	}
}

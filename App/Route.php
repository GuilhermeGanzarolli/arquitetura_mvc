<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

        $routes['contate_nos'] = array(
			'route' => '/contate_nos',
			'controller' => 'indexController',
			'action' => 'contateNos'
		);

		$this->setRoutes($routes);
	}

}

?>
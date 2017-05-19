<?php

namespace Drupal\regexr\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Symfony\Component\Routing\Route; 

class ThemeNegotiator implements ThemeNegotiatorInterface {
	public function applies(RouteMatchInterface $route_match) {
		$route = $route_match->getRouteObject();
		if (!$route instanceof Route) {
			return FALSE;
		}

		$option = $route->getOption('_custom_theme');
		if (!$option) {
			return FALSE;
		}

		return $option == 'regexr_theme';
	}

	public function determineActiveTheme(RouteMatchInterface $route_match) {
		return 'regexr_theme';
	}
}

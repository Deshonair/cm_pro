<?php

session_start();

//print_r($_SESSION); exit('debug: print session details');

include('config.php');
db_connect();
tracker();
dispatcher($routes);


function dispatcher($routes)
{
	
	// Requested URL
	$url = $_SERVER['REQUEST_URI'];
	
	// Remove Application Root From Url
	$url = str_replace(APP_ROOT.DS,'',$url);
	
	// Holds named captures, $_POST data
	$params = parse_params(); 

	// Removes query string from $url we don't need it anymore affect routes.
	$url = str_replace('?'.$_SERVER['QUERY_STRING'], '', $url);	

	// Becomes True If $route['url'] matches $url
	$route_match = false;

	// Loops over $routes looking for match
	foreach ($routes as $urls => $route)
	{
		// If match found, appends $matches to $params
		// also sets $route_match to true and exits loop
		if(preg_match($route['url'], $url, $matches))
		{
			$params = array_merge($params,$matches);
			$route_match = true;
			break;
		}
	}

	// if no route matched, display error
	if (!$route_match) { exit('no route found'); }
	
	// Include controller
	include(CONTROLLER_PATH.DS.$route['controller'].'.php');

	if(file_exists(VIEW_PATH.DS.'layouts'.DS.$route['controller'].'.php'))
	{ 
		// Include controller layout
		include(VIEW_PATH.DS.'layouts'.DS.$route['controller'].'.php');
	}
	else
	{
		// Include default layout
		include(VIEW_PATH.DS.'layouts'.DS.'application.php');
	}

	// reset our flashs back to empty.
	$_SESSION['flash']['notice'] = '';
	$_SESSION['flash']['warning'] = '';
}



/**
 * Return array of $_GET and $_POST data
 * @return array
 */
function parse_params()
{
	$params = array();

	//if (ini_get('magic_quotes_gpc') == 1) // comment if PHP vs is > 5.3
	//{
			if (!empty($_POST))
			{
				$params = array_merge($params, stripslashes_deep($_POST));
			}
			else
			{
				$params = array_merge($params, $_POST);
			}
		
	//}

	//if (ini_get('magic_quotes_gpc') == 1) // comment if PHP vs is > 5.3
	//{
			if (!empty($_GET))
			{
				$params = array_merge($params, stripslashes_deep($_GET));
			}
			else
			{
				$params = array_merge($params, $_GET);
			}
		
	//}

	return $params; 
}


// strips out escape characters
function stripslashes_deep($value)
{
	$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
	return $value;
}

?>
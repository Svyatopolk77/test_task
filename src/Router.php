<?php  

namespace App;

class Router
{
	//using constant 'views' from config/init.php


	public function get($route,$view,$data=[])
	{
		$uri=explode('?', $_SERVER['REQUEST_URI']);
		
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            return false;
        }
      
		if ($uri[0]===$route) {
			return include_once (views.$view);
		}
		
	}
	public function post($route,$redirect,$class,$class_func)
	{
		$uri= $_SERVER['REQUEST_URI'];

		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        }
      	
		if ($uri===$route) {
		
			if ($class && $class_func) {
				call_user_func(array($class,$class_func));
			}
			header('Location: '.$redirect);
			
		}
		
	}
}
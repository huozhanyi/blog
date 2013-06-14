<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller{
	public function indexAction(){
		return new Response('<html><body>Test xsdw!</body></html>');
	}
}
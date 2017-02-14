<?php

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;

class NameController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['names'] = "rudi";
		return $this->renderer->render($response, 'user-name', $data);
	}
}
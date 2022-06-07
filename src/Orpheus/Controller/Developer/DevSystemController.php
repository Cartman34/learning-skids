<?php

namespace Orpheus\Controller\Developer;

use Orpheus\InputController\HttpController\HttpRequest;
use Orpheus\InputController\HttpController\HttpResponse;

class DevSystemController extends DevController {
	
	/**
	 * @param HttpRequest $request The input HTTP request
	 * @return HttpResponse The output HTTP response
	 */
	public function run($request): HttpResponse {
		$this->addThisToBreadcrumb();
		
		return $this->renderHtml('developer/dev_system');
	}
	
}

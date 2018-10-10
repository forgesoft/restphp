<?php

use RestPHP/Routing;

Routing::add('index')
		->setRoute('/')
		->setMethod('POST')
		->setReference(App/Frontend/IndexController::indexAction());
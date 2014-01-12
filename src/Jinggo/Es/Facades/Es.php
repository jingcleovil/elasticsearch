<?php namespace Jinggo\Es\Facades;

use Illuminate\Support\Facades\Facade;

class es extends Facade {

	protected static function getFacadeAccessor() { return 'es'; }
	
}
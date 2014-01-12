<?php namespace Jinggo\Es;

class Es {

	function __construct()
	{
		
	}

	
	public function index($index,$params)
	{
		$esconfig = \Config::get('es::elasticsearch');

		$client = new \Elasticsearch\Client($esconfig);

		$param['index'] = $index;
		$param['type'] = $params['type'];
		$param['body'] = $params['payload'];

		$ret = $client->index($param);

		return $param;
	
	}
}
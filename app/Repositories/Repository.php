<?php

namespace App\Repositories;

use Config;

abstract class Repository{
	protected $model = FALSE;

	
	public function get($select = '*', $take = '', $pagination = FALSE){
		// $builder = $this->model->select($select, $take);
		$builder = $this->model->select($select);
		if($take){
			$builder->take($take);
		}
		if($pagination){
			return $builder->paginate(Config::get('settings.paginate'));
		}
		return $builder->get();
	}
	
}


<?php
namespace App\Repositories;

use App\Blog_content;

class Blog_contentRepository extends Repository{
	public function __construct(Blog_content $blog_items){
		$this->model = $blog_items;
	}
}

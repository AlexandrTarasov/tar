<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Repositories\ArticlesRepository;
use App\Repositories\MenusRepository;

class ArticleController extends SiteController
{
	protected $a_rep;
	protected $navigation;	


	public function __construct(ArticlesRepository $a_rep){
		// parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
		$this->a_rep = $a_rep;
		$menu = $this->getMenu();
		$this->navigation = view('pink.navigation')->with('menu', $menu)->render();
	}

	public function __invoke($alias)
	{
		if(!$alias){
			abort(404);
		}


		$page = Article::where('alias', $alias)->first();
        return view('pink.article', ['page' => $page['text'], 'navigation' =>$this->navigation, 'title' => $page['title']]);
    }

}

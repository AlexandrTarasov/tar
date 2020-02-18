<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog_content;
use App\Repositories\Blog_contentRepository;
use App\Repositories\MenusRepository;

class Blog_contentController extends SiteController
{
    protected $b_rep;
	protected $navigation;	


	public function __construct(Blog_contentRepository $b_rep){


		parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
		$this->b_rep = $b_rep;
		$menu = $this->getMenu();
		$this->navigation = view('pink.navigation')->with('menu', $menu)->render();
	}

	public function index(){
		$blog_items = $this->getBlogContent();	
		$title = "list of last published";
		return view('pink.blog_items', ['blog_items' =>$blog_items, 'title'=>$title, 'navigation' =>$this->navigation]);
	}

	public function getBlogContent($alias = FALSE)
	{
		return $this->b_rep->get(['title','text','created_at','alias'], 15);
	}

	public function show($alias){
		// $blog_item = $this->getBlogItem($alias);
		$blog_item = DB::table('blog_contents')->where('alias', $alias)->first(); 
		// dd($blog_item->text);
		return view('pink.blog_item', ['blog_item' =>$blog_item->text, 'header1' =>$blog_item->title, 'title'=>$blog_item->title, 'navigation' =>$this->navigation, 'tags' => $blog_item->tags]);
	}


}

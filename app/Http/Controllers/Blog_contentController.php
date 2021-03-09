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
	public $all_tags = [];

	public function __construct(Blog_contentRepository $b_rep){
		parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
		$this->b_rep = $b_rep;
		$menu = $this->getMenu();
		$this->navigation = view('pink.navigation')->with('menu', $menu)->render();
	}

	public function index(){
		$blog_items = $this->getBlogContent();	
		$this->getAllTags();
		$title = "list of last published";

		return view('pink.blog_items', ['blog_items' =>$blog_items, 'title'=>$title, 'navigation' =>$this->navigation, 'all_tags'=>$this->all_tags]);
	}

	
	public function getBlogContent($alias = FALSE)
	{
		return $this->b_rep->get(['title','text','created_at','alias', 'tags'], 15);
	}

	public function getAllTags($alias = FALSE)
	{
		foreach($this->b_rep->get(['tags']) as $val){
			$e = explode(',', $val->tags);

			if( isset($e[0]) && !in_array($e[0], $this->all_tags ) ){
				array_push($this->all_tags, trim($e[0]));
			}
			if( isset($e[1]) && !in_array($e[1], $this->all_tags ) ){
				array_push($this->all_tags, trim($e[1]));
			}
			if( isset($e[2]) && !in_array($e[2], $this->all_tags ) ){
				array_push($this->all_tags, trim($e[2]));
			}
			if( isset($e[3]) && !in_array($e[3], $this->all_tags ) ){
				array_push($this->all_tags, trim($e[3]));
			}
		}
	}

	public function showTaggedPosts($tag)
	{
		$title = 'result of search by '.$tag;
		$blog_tagged_items = DB::table('blog_contents')->where('tags','LIKE','%'.$tag.'%')->get(); 
$array = json_decode(json_encode($blog_tagged_items), true);
		return view('pink.blog_items', ['blog_items' =>$array, 'title'=>$title, 'navigation'=>$this->navigation]);
	}

	public function show($alias){
		$blog_item = DB::table('blog_contents')->where('alias', $alias)->first(); 
		$tags_str = '';
		$e = explode(',', $blog_item->tags);
		$tags_str = '<a href="" class=""> '.$e[0].'</a>';
		if( isset($e[1]) ){
			$tags_str.= ', <a href="" class=""> '.$e[1].'</a>';
		}
		if( isset($e[2]) ){
			$tags_str.= ', <a href="" class=""> '.$e[2].'</a>';
		}
		if( isset($e[3]) ){
			$tags_str.= ', <a href="" class=""> '.$e[3].'</a>';
		}
		return view('pink.blog_item', ['blog_item' =>$blog_item->text, 'header1' =>$blog_item->title, 'title'=>$blog_item->title, 'navigation' =>$this->navigation, 'tags' => $tags_str]);
	}


}

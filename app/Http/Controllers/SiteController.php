<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenusRepository;
use Menu;

class SiteController extends Controller
{
	protected $b_rep;
	protected $s_rep;
	protected $a_rep;
	protected $m_rep;

	protected $template;
	protected $vars;
	protected $bar = FALSE;
	protected $contentLeftBar = FALSE;
	protected $contentRightBar = FALSE;

	public function __construct(MenusRepository $m_rep){
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);
		$this->m_rep = $m_rep;
	}

	protected function renderOutput(){
		
		$menu = $this->getMenu();
		$navigation = view('pink.navigation')->with('menu', $menu)->render();
		$this->vars = array_add($this->vars, 'navigation', $navigation);
		return view($this->template)->with($this->vars);
	}
	protected function getMenu(){
		$menu = $this->m_rep->get();
		$mBuilder = Menu::make('MyNav', function($m) use ($menu){
			// $m
			foreach($menu as $item){
				if($item->parent == 0){
					if($item->id < 10)
					{
						$m->add($item->title, ['url'=>$item->path, 'class'=> 'blacktop'])->id($item->id);
					}else{
						$m->add($item->title, $item->path)->id($item->id);
					}
				}
				else{
					if($m->find($item->parent)){
						$m->find($item->parent)->add($item->title, $item->path)->id($item->id);
					}
				}
			}
		});
		// dd($mBuilder);
		return $mBuilder;
	}


}

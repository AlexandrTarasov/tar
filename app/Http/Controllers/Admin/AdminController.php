<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Menu;
class AdminController extends Controller
{
    //
	protected $p_rep;
	protected $a_rep;
	protected $user;
	protected $template;
	protected $content = FALSE;
	protected $title;
	protected $vars;

	public function __construct(){
		$this->user = Auth::user();
		if(!$this->user){
			// abort(403, 'Unauthorized.'); 
			echo "not authorized";
		}
	}

	public function renderOutput(){
		$this->vars = array_add($this->vars,'title', $this->title);
		$menu = $this->getMenu();
		$navigation = view(env('THEME').'.admin.navigation')->with('menu', $menu)->render();
		$this->vars = array_add($this->vars,'navigation', $navigation);

		if($this->content){
			$this->vars = array_add($this->vars,'content', $this->content);
		}

		$footer = view(env('THEME'),'.admin.footer')->render();
		$this->vars = array_add($this->vars,'footer',$footer);

		return view($this->template)->with($this->vars);
	}
	public function getMenu(){
		return Menu::make('adminMenu', function($menu){
			$manu->add('Articles', array('route' => 'admin.articles.index'));
			$manu->add('Portfoleo', array('route' => 'admin.articles.index'));
			$manu->add('Menu', array('route' => 'admin.articles.index'));
			$manu->add('Users', array('route' => 'admin.users.index'));
			$manu->add('Previliges', array('route' => 'admin.permissions.index'));
		});
	}

}

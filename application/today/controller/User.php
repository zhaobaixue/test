<?php
namespace app\today\controller;
use think\Controller;
use app\today\model\UserModel;
class User extends Controller {
	
	public function index(){
		// return 1; die;
		// $user = UserModel::get(1);
		// echo $user->status; 
		echo Env::get('error.USERNAMEFALSE');

	}
	
}
?>
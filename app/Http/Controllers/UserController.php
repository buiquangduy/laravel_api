<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Auth;
use Input,File;
use Illuminate\Http\Request;

class UserController extends Controller {
	//get list user
	public function getList(){
		$json = array();
		$user = User::select('id','username','level','created_at','updated_at')->orderBy('id','DESC')->get()->toArray();
		if (isset($user))
		{
			$json['status'] = "success";
			$json['data'] = $user;
		} else {
			$json['status'] = "fail";
		}
		return $json;
	}
	// add user
	public function postAdd(Request $request)
	{
		$this->validate($request,
						[
							'txtUsername'  => 'required|unique:users,username',
							'txtPassword'  => 'required',
							'txtRepassword'=> 'required|same:txtPassword',
							'txtEmail' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9+])*(\.[a-z]{2,4}){1,2}$/'
						],
						[
							'txtUsername.required'  => 'Please enter username',
							'txtUsername.unique'    => 'User Is Exists',
							'txtPassword.required'  => 'Please enter password',
							'txtRepassword.required'=> 'Please enter re-password',
							'txtRepassword.same'    => 'Two password don\'t match',
							'txtEmail.required' => 'Please enter email',
							'txtEmail.regex'    => 'Email error syntax'
						]
				);
		$user = new User();
		User::createUser($user,$request);
		return redirect('listuser');

	}
	//get a user 
	public function getEdit($id)
	{
		if (is_numeric($id))
		{
			$data = User::find_user($id);
			$json = array();
			if (isset($data))
			{
				$json['status'] = "success";
				$json['data'] = $data;
			} else {
				$json['status'] = "fail";
				$json['data'] = "underfile";
			}
			return $json;
		} else {
			echo "$id not numberic";
		}
	}
	//update user
	public function postEdit($id,Request $request){
		$this->validate($request,
						[
							'txtUsername'  => 'required',
							'txtRepassword'=> 'same:txtPassword',
							'txtEmail' => 'regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9+])*(\.[a-z]{2,4}){1,2}$/'
						],
						[
							'txtUsername.required'  => 'Please enter username',
							'txtRepassword.same'    => 'Two password don\'t match',
							'txtEmail.regex'    => 'Email error syntax'
						]
				);
		$user = User::find_user($id);
		if ($user)
		{
			$result = User::createUser($user,$request);
			return redirect('listuser');
		} else {
			return "invalid id";
		}
		
	}
	//delete a user
	public function getDelete($id)
	{
		if (is_numeric($id))
		{
			$user = User::find_user($id);
			if ($user)
			{
				if ($user->delete($id))
				{
					return redirect('listuser');
				} else {
					echo "404 error";
				}
			} else {
				return "invalid id";
			}
		} else {
			echo "$id is not numberic";
		}
		
	}
}

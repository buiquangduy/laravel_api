<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtUsername'  => 'required|unique:users,username',
			'txtPassword'  => 'required',
			'txtRepassword'=> 'required|same:txtPassword',
			'txtEmail' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9+])*(\.[a-z]{2,4}){1,2}$/'
			
		];
	}
	public function messages()
	{
		return [
				'txtUsername.required'  => 'Please enter username',
				'txtUsername.unique'    => 'User Is Exists',
				'txtPassword.required'  => 'Please enter password',
				'txtRepassword.required'=> 'Please enter re-password',
				'txtRepassword.same'    => 'Two password don\'t match',
				'txtEmail.required' => 'Please enter email',
				'txtEmail.regex'    => 'Email error syntax'
		];
	}

}

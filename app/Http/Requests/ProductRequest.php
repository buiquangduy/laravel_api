<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'txtName' => 'required|unique:products,name',
			'txtPrice' => 'required', 
			'file' => 'required|image'
		];
	}
	public function messages()
	{
		return [
			'txtName.required'  => 'Bạn chưa nhập tên sản phẩm',
			'txtPrice.required'  => 'Bạn chưa nhập giá sản phẩm',
			'txtName.unique'    => 'Tên sản phẩm không được trùng',
			'file.required'  => 'chọn ảnh đi',
			'file.image'  => 'This File not image'	
  		];
	}

}

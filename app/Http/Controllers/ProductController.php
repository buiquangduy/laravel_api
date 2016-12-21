<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Auth;
use Input,File;

class ProductController extends Controller {
	//get list product
	public function getList()
	{
		$data = Product::select('id',
								'name',
								'alias',
								'price',
								'content',
								'description',
								'active',
								'created_at',
								'updated_at')
							->orderBy('id','DESC')
							->get();
		if (isset($data))
		{
			$json['status'] = "success";
			$json['data']  = $data;
		} else {
			$json['status'] = "fail";	
		}
		return response()->json($json);
	}

	// add product
	public function postAdd(Request $product_request)
	{
		$this->validate($product_request,
						[
							"txtName" => "required",
							"txtPrice"=> "required"
						],
						[
							"txtName.required" => "please enter name product",
							"txtPrice.required"=> "please enter price product"
						]
				);
		$product = new Product();
		Product::createProduct($product,$product_request);
		return redirect('listproduct');
	}

	//get a product as product id
	public function getEdit($id)
	{
		if (is_numeric($id)) {
			$json = array();
			$product = Product::find_product($id);
			if ($product) {
				$json['status'] = "success";
				$json['data'] = $product;
				return $json;
			} else {
				return "underfile";
			}
		} else {
			echo "$id not numberic";
		}
	}

	//update a product
	public function postEdit($id , Request $request)
	{
		$product = Product::find_product($id);
		Product::createProduct($product,$request);
		$img_current = 'resources/upload/'.$request->img_current;
		if(File::exists($img_current))//xoa hinh cu
		{
			File::delete($img_current);
		}
		return redirect('listproduct');
	}

	//delete product
	public function getDelete($id)
	{
		if (is_numeric($id)) {
			$json = array();
			$product = Product::find_product($id);
			//File::delete('resources/upload/',$product->image);
			if($product->delete($id))
			{
				$json['code'] = 1;
				$json['status'] = "success";
				return redirect('listproduct');

			} else {
			 	$json['code'] = 0;
				$json['status'] = "fail";
				return $json;
			}
		} else {
			echo "$id not numberic";
		}
	}

}

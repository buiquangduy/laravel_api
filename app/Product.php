<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	//
	protected $table = 'products';
	protected $fillable = ['name','alias','price','content','image','description','user_id','cate_id'];
	//public $timestamps = false;

	public function cate()
	{
		return $this->belongsTo('App\Category');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	//create a product
	public static function createProduct ($product,$request)
	{
		// $img_name = $product_request->file('file')->getClientOriginalName();
		$product->name = $request->txtName;
		$product->alias = changeTitle($request->txtName);
		$product->price = $request->txtPrice;
		$product->content = $request->txtContent;
		$product->description = $request->txtDescription;
		$product->active = $request->txtActive;
		if(!empty($request->file('image')))
		{
			$file_name = $request->file('image')->getClientOriginalName();
			$product->image = $file_name;
			$request->file('image')->move('resources/upload/',$file_name);
		} else {
			$product->image = $request->img_current;	
		}
		//$product->image = $request->image;
		$product->user_id = 1;
		$product->cate_id = $request->sltParent;
		// $product_request->file('file')->move('resources/upload/',$img_name);
		$product->save();
	}

	//find a product
	public static function find_product ($id)
	{
		return Product::find($id);
	}

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	//
	protected $table = 'categories';
	protected $fillable = ['name','alias','order','description'];
	//public $timestamps = false;
	public function product()
	{
		return $this->hasMany('App\Product');
	}
	
	//create a category
	public static function createCategory ($cate,$request)
	{
		$cate->name = $request->txtCateName;
		$cate->alias = changeTitle($request->txtCateName);
		$cate->active = $request->txtActive;
		$cate->description = $request->txtDescription;
		$cate->save();
	}

	//fin a category
	public static function find_category ($id)
	{
		return Category::find($id);
	}
	
}

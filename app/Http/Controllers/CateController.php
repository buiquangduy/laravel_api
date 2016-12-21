<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CateRequest;
use App\Http\Controllers\Controller;
use App\Category;
//use Request;

use Illuminate\Http\Request;


class CateController extends Controller {
	//get list category
	public function getList() 
	{
		$json = array();
		$data = Category::select('id',
								'name',
								'alias',
								'active',
								'description',
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

	// create category
	public function postadd (Request $request)
	{
		$this->validate($request,
						["txtCateName" => "required"],
						["txtCateName.required" => "please enter name category"]
						);
		$cate = new Category();
		Category::createCategory($cate,$request);
		return redirect('listcategory');
		
	}

	//get a category
	public function getcategory ($id)
	{
		if (is_numeric($id))
		{
			$json = [];
			$data= Category::find_category($id);
			if (isset($data))
			{
				$json['status'] = "success";
				$json['data'] = $data;
				return response()->json($json);
			} else {
				$json['status'] = "fail";
				$json['err'] = "message error";
				return response()->json($json);
			}
		} else {
			echo "$id not numberic";
		}
	}

	// update a category
	public function postedit (Request $request,$id)
	{
		 $this->validate($request,
		 				["txtCateName" => "required"],
		 				["txtCateName.required" => "please enter name category"]
		 				);
		$cate = Category::find_category($id);
		Category::createCategory($cate,$request);
		return redirect('listcategory');
	}
	
	//delete a category
	public function getdelete($id)
	{
		if (is_numeric($id))
		{
			$json = array();
			$cate = Category::find_category($id);
			if($cate)
			{
				if ($cate -> delete($id))
				{
					$json['status'] = "success";
					return redirect('listcategory');
				} else {
					$json['status'] = "fail";
					return $json;
				}
			} else {
				echo "cate not find ";
			}
		} else {
			echo "$id  is NOT numeric";
		}
	}

	//remove multil category
	public function getDel($arr)
	{		
		$leng = explode("," , $arr); //chuyển chuỗi thành mảng
		if($leng>0)
		{
			for($i=0;$i< count($leng);$i++)
			{
				$cate= Category::find($leng["$i"]);
				$cate->delete($leng["$i"]);
			}
		}
		return "OK";
	} 
	//search category
	public function getSearch()
	{
		//$search = $request->input('search');
		$search = $_GET['search'];
		if($search=="")
		{	
			return redirect('listcategory');
		}
		else
		{
			$json = [];
			$cate = Category::where('name','like',"%$search%")->select('id','name','alias','active','description','created_at','updated_at')->get()->toArray();
			$sosp = count($cate);
			$json['data'] = $cate;
			$json['count'] = $sosp;
			$json['status'] = "success";
			return $json;
		}
	}
}

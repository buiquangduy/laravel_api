@extends('admin.master')
@section('title','list product')
@section('tit','List product')
@section('content')
@section('them')
    @parent
    <span class="divider">></span>
 @endsection
 @section('them2')
    @parent
    <li class="active">Add</li>
 @endsection
<div class="workplace">
        @include('block.error')
        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Products Management</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="{!! url('admin/product/add')!!}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                    	<div class="row-form">
                            <div class="span3">Product Name:</div>
                            <div class="span9"><input type="text" name="txtName" value="{!!old('txtName')!!}" placeholder="some text value..." autofocus="true" /></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Category:</div>
                            <div class="span9">
                                <select name="sltParent" id="sltParent">
                                    
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>           
                    	<div class="row-form">
                            <div class="span3">Price:</div>
                            <div class="span9"><input type="text" name="txtPrice" value="{!!old('txtPrice')!!}" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Content:</div>
                            <div class="span9"><textarea  name="txtContent"  placeholder="Textarea field placeholder...">
                                         {!!old('txtContent')!!}                      
                            </textarea></div>
                            <div class="clear"></div>
                        </div>  
                    	<div class="row-form">
                            <div class="span3">Description:</div>
                            <div class="span9"><textarea name="txtDescription" placeholder="Textarea field placeholder...">
                                 {!!old('txtDescription')!!}
                            </textarea>
                            </div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Upload Image:</div>
                            <div class="span9"><input type="file" name="image" size="19" value="{!!old('image')!!}"></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="txtActive" id="txtActive">
                                    <option value="">choose a option...</option>
                                    <option value="1">Activate</option>
                                    <option value="2">Deactivate</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Create</button>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>
    </div>
    <script type="text/javascript">
        var selectCategoryModule = new ListCategoryModule();
        selectCategoryModule.initSelectAddProduct();
    </script>
@endsection
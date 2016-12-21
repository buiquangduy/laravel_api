 @extends('admin.master')
 @section('title','add category')
 @section('tit','List Categories')
 @section('them')
    @parent
    <span class="divider">></span>
 @endsection
 @section('them2')
    @parent
    <li class="active">Add</li>
 @endsection
 @section('content')
<div class="workplace">
        @include('block.error')

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Categories Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="{!! route('admin.cate.postAdd')!!}" method="post">
                        <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                    	<div class="row-form">
                            <div class="span3">Category Name:</div>
                            <div class="span9"><input type="text" name="txtCateName" placeholder="some text value..."/></div>
                            <span>{!!$errors->first('txtCateName')!!}</span>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="txtActive">
                                    <option value="0">choose a option...</option>
                                    <option value="1">Activate</option>
                                    <option value="2">Deactivate</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div> 
                            <div class="row-form">
                            <div class="span3">Category Description:</div>
                            <div class="span9"><input type="text" name="txtDescription" placeholder="some text value..."/></div>
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
@endsection
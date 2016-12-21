 @extends('admin.master')
 @section('title','edit category')
 @section('tit','List Categories')
 @section('them')
    @parent
    <span class="divider">></span>
 @endsection
 @section('them2')
    @parent
    <li class="active">Edit</li>
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
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
                <div class="block-fluid" id="updatecate">
                    <form action="{!! url('admin/cate/edit',$id) !!}" method="post">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                    	<div class="row-form">
                            <div class="span3">Category Name:</div>
                            <div class="span9"><input type="text" id="catename" name="txtCateName" autofocus="true" /></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="txtActive" id="cateactive">
                                        <option value="1">Activate</option>
                                        <option value="2">NOTActivate</option>       
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Category Description:</div>
                            <div class="span9"><input type="text" name="txtDescription" id="catedescript" /></div>
                            <div class="clear"></div>
                        </div>                           
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Update</button>
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
        var updateCategoryModule = new UpdateCategoryModule();
        updateCategoryModule.init();
    </script>
@endsection
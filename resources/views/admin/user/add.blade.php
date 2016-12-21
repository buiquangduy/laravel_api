 @extends('admin.master')
 @section('title','add user')
 @section('tit','Add user')
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

        <div class="row-fluid">
        @include('block.error')
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="{{url('admin/user/add')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                    	<div class="row-form">
                            <div class="span3">Username:</div>
                            <div class="span9"><input type="text" name="txtUsername" value="{!!old('txtUsername')!!}" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Email:</div>
                            <div class="span9"><input type="text" name="txtEmail" value="{!!old('txtEmail')!!}" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Password:</div>
                            <div class="span9"><input type="password" name="txtPassword" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Repassword:</div>
                            <div class="span9"><input type="password" name="txtRepassword" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-group">
                                <div style="padding-left:20px; ">User Level</div>
                                <label class="radio-inline span9">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline span9">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
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
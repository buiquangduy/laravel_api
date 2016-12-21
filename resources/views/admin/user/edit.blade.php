 @extends('admin.master')
 @section('title','edit user')
 @section('tit','Edit user')
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

        <div class="row-fluid">
             @include('block.error')
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>
                    <div class="clear"></div>
                </div>
                <input type="hidden" name="id" id="id" value="{{$id}}">
                <div class="block-fluid">
                    <form action="{!! url('admin/user/edit',$id) !!}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                        <div class="row-form">
                            <div class="span3">Username:</div>
                            <div class="span9"><input type="text" name="txtUsername" id="txtUsername"/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Email:</div>
                            <div class="span9"><input type="text" name="txtEmail" id="txtEmail" /></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Password:</div>
                            <div class="span9"><input type="text" name="txtPassword" id="txtPassword" /></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Repassword:</div>
                            <div class="span9"><input type="text" name="txtRepassword" id="txtRepassword" /></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-group">
                                <div style="padding-left:20px; ">User Level</div>
                                <label class="radio-inline span9">
                                    <input name="rdoLevel" id="rdoLevel" value="1" type="radio" />Admin
                                </label>
                                <label class="radio-inline span9">
                                    <input name="rdoLevel" id="rdoLevel" value="2" type="radio" />Member
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
    <script type="text/javascript">
        var updateUserModule = new UpdateUserModule();
        updateUserModule.init();
    </script>
@endsection
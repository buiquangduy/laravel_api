<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title>NTQ Solution Admin Control Panel- @yield('title')</title>

    <link rel="icon" type="image/ico" href="{!! url('public/admin/favicon.ico')!!}"/>

    <link href="{!! url('public/admin/css/stylesheets.css')!!}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{!! url('public/admin/js/js/jquery-2.2.4.min.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/js/bootbox.min.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/myscript.js')!!}"></script>
    <!-- <script type="text/javascript" src="{!! url('public/admin/js/jsapi.js')!!}"></script> -->
    <script type="text/javascript" src="{!! url('public/admin/js/listCategoryModule.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/getListCategoryModule.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/updateCategoryModule.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/multilRemove.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/searchCategoryModule.js')!!}"></script>
    
    
    <!-- js product -->
    <script type="text/javascript" src="{!! url('public/admin/js/listProductModule.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/getListProductModule.js')!!}"></script>    
    <script type="text/javascript" src="{!! url('public/admin/js/updateProductModule.js')!!}"></script>
    
    <!-- js user -->
    <script type="text/javascript" src="{!! url('public/admin/js/listUserModule.js')!!}"></script>  
    <script type="text/javascript" src="{!! url('public/admin/js/updateUserModule.js')!!}"></script>
    
</head>
<body>

<div class="header">
    <a class="logo" href="list-categories.html">
        <img src="{!!url('public/admin/img/logo.png')!!}" alt="NTQ Solution - Admin Control Panel" title="NTQ Solution - Admin Control Panel"/>
    </a>
    
</div>

<div class="menu">

    <div class="breadLine">
        <div class="arrow"></div>
        <div class="adminControl active">
            Hi, bui quang duy
        </div>
    </div>

    <div class="admin">
        <div class="image">
            <img src="{!!url('public/admin/img/users/avatar.jpg')!!}" class="img-polaroid"/>
        </div>
        <ul class="control">
            <li><span class="icon-cog"></span> <a href="">Update Profile</a></li>
            <li><span class="icon-share-alt"></span> <a href="">Logout</a></li>
        </ul>
    </div>

    <ul class="navigation">
        <li>
            <a href="{!! url('listcategory') !!}">
                <span class="isw-grid"></span><span class="text">Categories</span>
            </a>
        </li>
        <li>
            <a href="{!! url('listproduct') !!}">
                <span class="isw-list"></span><span class="text">Products</span>
            </a>
        </li>
        <li>
            <a href="{!! url('listuser') !!}">
                <span class="isw-user"></span><span class="text">Users</span>
            </a>
        </li>
    </ul>

</div>

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-categories.html">@yield('tit')</a>@section('them')
            @show
            </li>
            @section('them2')
            @show

        </ul>

    </div>
    <!-- cho nay hien thong bao -->
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! @Session::get('flash_level') !!}">
                                {!! @Session::get('flash_message') !!}
                            </div>
                        @endif
    @yield('content')

</div>

</body>
</html>
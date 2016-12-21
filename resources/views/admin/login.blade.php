<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>NTQ Solution Admin Control Panel</title>

    <link rel="icon" type="image/ico" href="{!! url('public/admin/favicon.ico')!!}"/>
    
    <link href="{!! url('public/admin/css/stylesheets.css')!!}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{!! url('public/admin/js/js/jquery-2.2.4.min.js')!!}"></script>
    <script type="text/javascript" src="{!! url('public/admin/js/myscript.js')!!}"></script>
</head>
<body>
    
    <div class="loginBox">       
    @include('block.error') 
        <div class="loginHead">
            <img src="{!! url('public/admin/img/logo.png')!!}" alt="NTQ Solution Admin Control Panel" title="NTQ Solution Admin Control Panel"/>
        </div>
        <form class="form-horizontal" action="" method="POST">    
        <input type="hidden" name="_token" value="{!! csrf_token()!!}">        
            <div class="control-group">
                <label for="inputUsername">Username</label>                
                <input type="text" id="inputUsername" name="username" />
            </div>
            <div class="control-group">
                <label for="inputPassword">Password</label>                
                <input type="password" name="password" id="inputPassword"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox"> Remember me</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Sign in</button>
            </div>
        </form>        
        
    </div>    
    
</body>
</html>

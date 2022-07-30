<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Document</title>
</head>
        <body>
        <form action ="{{ route('register') }}" method="POST">
            {{ csrf_field() }}
            @if(empty($message))
            @else
            <div class="alert alert-danger" style="color: black">{{$message}}</div>
            @endif
            <div class="form-group">
            <label> Email </label>
                <input type="text" class="form-control" id="email" name="email" placeholder="">
               
            </div> </br>
            <div class="form-group">
            <label> Name </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
               
            </div> </br>
            <div class="form-group">
            <label> Password </label>
                <input type="password" class="form-control fadeIn second" id="password" name="password" placeholder=" ">
               
            </div>
            <div class="form-group">
            <label> Confirm </label>
                <input type="password" class="form-control fadeIn second" id="confirm" name="confirm" placeholder="">
               
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <label class="custom-control custom-checkbox ">
                   
                </label>
                <button type="submit" class="btn btn-success" name="login" id='login' style='margin-bottom: 40px; margin-top:10px'>
                    create</button>
            </div>
        </form>
        </body>
</html>
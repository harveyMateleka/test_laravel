<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="my-3" action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            @if(empty($message))
            @else
            <div class="alert alert-danger" style="color: black">{{$message}}</div>
            @endif
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Renseigner votre adresse email">
               
            </div> </br>
            <div class="form-group">
                <input type="password" class="form-control fadeIn second" id="password" name="password" placeholder="Renseigner votre mot de passe ">
               
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <label class="custom-control custom-checkbox ">
                   
                </label>
                <button type="submit" class="btn btn-success" name="login" id='login' style='margin-bottom: 40px; margin-top:10px'>
                    Se Connecter</button>
            </div>
        </form>
</body>
</html>
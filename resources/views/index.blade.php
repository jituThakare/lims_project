<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" >
</head>
<body>
    <div class="container mt-5"> 
        <h2 class="text-center">Life Insurance Management System</h2>  
        {{-- @if ($errors->any())
         <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
         </div>
        @endif --}}

        <div class="mx-auto mt-5  " style="width: 400px;height:500px;
        padding-top: 20px;">

           <div class="card text-white bg-dark mb-3" style="max-width: 25rem;min-height: 25rem;padding-top:20px; box-shadow: 1px 1px 11px 10px #c5bfbf;">
            <div class="card-header text-center mb-3 display-5 text-warning">Login</div>
            <div class="card-body mx-3">
                <form  method="post">
                  @csrf
                    <div class="mb-4">
                      <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="USERNAME" value="111">
                    </div>
                    
@error('username')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
                    <div class="mb-4">
                      <input type="password" class="form-control" name="password" placeholder="PASSWORD" id="exampleInputPassword1" value="222">
                    </div> 
                    
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
                   
                    <button type="submit" name="submit" class="btn btn-primary" style="display: block;          width: 100%;position: relative;">Login</button>
                  </form>
            </div>
          </div>

        </div>

        

        

    </div>
</body>
</html>
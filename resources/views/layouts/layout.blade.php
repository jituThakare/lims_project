<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" >
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title') page</title>   
</head>
<body>
   
    <div id="wrapper" style="min-height: 100vh">
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
            <div class="container-fluid px-0">
                <div style="width: 16.6%;">
                    <a class="navbar-brand " title="home" style="margin-left: 50px;font-weight: 500;
                    font-size: 29px;" href=" {{ route('home') }} ">Ageon life</a>
                </div>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText" style="padding-right: 100px;background: #47c151;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                </ul>
                <span class="navbar-text">
                    <a href="{{ route('logout') }}" class="btn btn-danger" title="Logout"><i class="fas fa-exclamation-circle fa-2x"></i></a>
                </span>
              </div>
            </div>
         </nav>

        <div class="row" id="home-content">
           <div class="col-md-2" style="background:black; padding:0px"> 
                <ul class="" id="main-menu">
                    <li style="height: 118px;background: #1cc0d5;">
                        <div class="user-img-div text-center pt-4">
                            <i class="fas fa-user-cog fa-2x"></i>
                            <div class="inner-text">                            
                                <h5 class="text-white"> welcome, @if (session('name'))
                                    {{session('name')}}
                                @endif</h5>                  
                            {{-- {{$agent_id}} --}}
                            </div>
                        </div>
                    </li>
                <li class="list-item">
                    <a href="{{ route('client') }}" title="client" class="text-white text-decoration-none">
                        <i class="px-2  fa fa-users "></i>
                        CLIENTS
                    </a >  
                </li> 
                <li class="list-item">
                    <a href="{{ route('agent') }}" class="text-white text-decoration-none"><i class="px-2  fas fa-life-ring "></i>AGENTS</a>
                            
                </li>   
                <li class="list-item">
                    <a href=" {{ route('policy')}} " class="text-white text-decoration-none"><i class="px-2  fas fa-edit "></i>POLICY</a>
                        
                </li>     
                <li class="list-item">
                    <a href=" {{ route('nominee')}}" class="text-white text-decoration-none"><i class="px-2  fa fa-heart "></i>NOMINEE</a>
                            
                </li> 
                <li class="list-item">
                    <a href="{{ route('payment')}}" class="text-white text-decoration-none"><i class="px-2  fa fa-credit-card "></i>PAYMENTS</a>                            
                </li>                       
                    
                </ul>
            </div>    
            <div class="col-md-10 pt-3 px-4 home_page" style="min-height:800px;">
                @yield('content')
              
            </div>
        </div>                 
        
    </div>    
    <script src=" {{asset("js/bootstrap.min.js")}} "></script>
    <script src=" {{asset("js/script.js")}} "></script>
    
</body>
</html>
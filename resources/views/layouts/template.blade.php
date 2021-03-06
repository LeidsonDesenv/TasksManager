<!DOCTYPE html>
<html>
<head>
    <title>{{ config("app.name", "Laravel") }} @yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, inicial-scale=1"/>  
    <!--Style -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/custom.css') }}" rel="stylesheet">
   
   
</head>
<body>
   <!-- JQuery CDN -->
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>   
  
  <!-- Javascript CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
  crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route("home")}}">Tasks Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
       
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
       </li>
        <li class="dropdown">
          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        @if(Auth::check()) 
            {{ auth()->user()->name }} <span class="caret"></span></a>    
            <ul class="dropdown-menu">            
                <li><a href="{{ route("logout") }}">Logout</a></li>            
            </ul>
        @else
          Opções <span class="caret"></span></a>    
          <ul class="dropdown-menu">            
            <li><a href="{{ route("login") }}">Logar</a></li>
            <li><a href="{{ route("user.signup") }}">Registre-se</a></li>            
          </ul>
        @endif  
            
           
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <div class="container">
        
    </div> <!-- container -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="container">
    @yield('content')
  </div>  
</body>
</html>




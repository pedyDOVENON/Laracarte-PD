<nav class="navbar navbar-expand-md navbar-dark bg-info static-top">
   <div class="container">
     <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link "  href="{{route('about_path')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#Artisan" tabindex="-1" >Artisan</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Laravel-News</a>
                    <a class="dropdown-item" href="https://laracast.com">Laracasts</a>
                </div>
            </li>

            <li class="nav-item">
               <a class="nav-link " href="{{route('contact_path')}}" tabindex="-1" >Contact</a>
            </li>
        </ul>

         <ul class="nav navbar-nav navbar-right">

              <li><a href="#login">Login</a></li>

             <li><a href="#register">Register</a></li>
         </ul>
     </div>
   </div>
</nav>
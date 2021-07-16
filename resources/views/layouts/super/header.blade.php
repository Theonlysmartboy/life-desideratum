 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
     <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header page-scroll">
             <button type="button" class="navbar-toggle" data-toggle="collapse"
                 data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 Menu <i class="fa fa-bars"></i>
             </button>
             <a class="navbar-brand" href="{{ route('master.dashboard') }}">{{ config('app.name') }}</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right">
                 <li>
                     <a href="{{ route('master.dashboard') }}">Home</a>
                 </li>
                 <li>
                     <a href="">About</a>
                 </li>
                 <li>
                     <a href="">Contact</a>
                 </li>
                 @guest
                     @if (Route::has('login'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                     @endif

                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                     @endif
                 @else
                     <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }}
                         </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" style="background-color: transparent !important; color:#000000 !important;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @endguest
             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container -->
 </nav>

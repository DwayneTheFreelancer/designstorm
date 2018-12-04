<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <style>
      #admin-section table {
        display: table;
        width: 100%;
      }

      #admin-section table thead {
        background-color: grey;
      }

      #admin-section table thead th {
        border: 1px solid black;
      }

      #admin-section table tbody td {
        border: 1px solid black;
        text-align: center;
      }

      #admin-section table tbody td .edit-btn {
        font-size: 12px;
        padding: 10px 20px;
        background: green;
        display: inline-block;
        border-radius: 3px;
      }

      #admin-section table th,
      #admin-section table td {
        padding: 10px 20px;
      }


      label {
        text-transform: capitalize;
      }

      input,
      select,
      textarea {
        border: 1px solid #2a70ef;
        width: 100%;
        padding: 15px;
        margin-bottom: 1rem;

        &:focus {
          outline: none;
        }
      }

      button {
        min-width: 200px;
        background: #2a70ef;
        border: 1px solid #2a70ef;
        color: white;
        font-size: 1.2rem;
        padding: 10px;
        border-radius: 3px;
        font-weight: 300;
        margin: 0 auto;
      }

      .delete-btn {
        width: 100%;
        background: red;
        border: 1px solid red;
        color: white;
        font-size: 1.2rem;
        padding: 5px;
        border-radius: 3px;
        font-weight: 300;
        margin: 0 auto;
        text-decoration: none;
        display: inline-block;
        text-align: center;
      }
    </style> -->
  </head>
  <body>
    <header style="margin-top: -50px">
      <div class="container"><a class="logo" href="/">Design Storm</a>
          <nav>
            @guest
            <a href="/register">register</a>
            <a href="/login">login</a>
            @else
            <span>Welcome back! <a href="/account"></a></span>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest
          </nav>
      </div>
    </header>
    <div id="admin-section">
      <div id="sidemenu">
        <div class="logo"> </div>
        <nav>
          <a class="active" href="/account"> 
            <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard
          </a>

          <a class="active" href="/account/projects"> 
            <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>Projects
          </a>
        </nav>
      </div>
      <div id="content-area">
          @yield('content')
      </div>
    </div>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App') - kjkj1232 test </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Weibo App</a>
      <ul class="navbar-nav justify-content-end">
       <li class="nav-item"><a class="nav-link" href="/help">幫助</a></li>
       <li class="nav-item"><a class="nav-link" href="/#">登錄</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
</body>
</html>

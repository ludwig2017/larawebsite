<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="./">LaraWebSite</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="./">Home</a></li>
      <li class="{{Request::is('about') ? 'active' : ''}}"><a href="about">About</a></li>
      <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="contact">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="{{Request::is('register') ? 'active' : ''}}"><a href="register"><span class="fa fa-user"></span> Sign Up</a></li>
      <li class="{{Request::is('login') ? 'active' : ''}}"><a href="login"><span class="fa fa-sign-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
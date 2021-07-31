<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
  <style>
    .custom-login {
      height: 40rem;
      padding-top: 8rem;
    }
    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 1rem;
      background: #fafafa;
    }
  </style>
<body>
  @include('includes.header')
  @yield('content')
  @include('includes.footer')
</body>
</html>
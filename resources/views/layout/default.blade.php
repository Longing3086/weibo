<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Weibo App') - 这是一个微博系统</title>
  <link rel="stylesheet" href= "{{ mix('css/app.css') }}">
</head>

<body>
  @include('layout._header')

<div class="container">
  @include('shared._messages')
  @yield('content')
  @include('layout._footer')
</div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

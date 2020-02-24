<!DOCTYPE html>
<html>
<head>
  @include('components.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('components.header')
  @include('components.sidebar')
  <div class="content-wrapper">
    @yield('content')
  </div>
  @include('components.footer')
</div>
  @include('components.script')
</body>
</html>

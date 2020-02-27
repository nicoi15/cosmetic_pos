<!DOCTYPE html>
<html>
<head>
  @include('components.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
    @include('components.header')
    @include('components.sidebar')

    @yield('content')
 
  @include('components.footer')
</div>
  @include('components.script')
</body>
</html>

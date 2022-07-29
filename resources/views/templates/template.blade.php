<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>
</head>
<body>
  @yield('header')
  <main>
    @if(session('msg'))
      <p class="msg">{{session('msg')}}</p>
    @endif
    @yield('content')
  </main>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
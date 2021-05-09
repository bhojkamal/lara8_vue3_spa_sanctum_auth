<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>{{env('APP_NAME')}}</title>
  <!-- <script src="{{ mix('js/app.js') }}"></script> -->
</head>

<body>
  @if (Auth::check())
  <script>
  window.Laravel = {
    !!json_encode([
      'isLoggedin' => true,
      'user' => Auth::user()
    ]) !!
  }
  </script>
  @else
  <script>
  window.Laravel = {
    !!json_encode([
      'isLoggedin' => false
    ]) !!
  }
  </script>
  @endif
  <h3 class="text-center">Namaste from larave 8 app blade</h3>
  <div id="app">
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
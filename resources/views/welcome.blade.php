<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel 8, sanctum authentication and vue 3</title>
</head>

<body>
  <h3 class="text-center">Welcome to laravel 8 with vue 3 from welcome blade</h3>
  <div id="app"></div>
  <script src="{{ mix('js/app.js') }} "></script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome 5 icon -->
  <script src="https://kit.fontawesome.com/d3981548c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href={{ mix("css/app.css") }} />
  <link rel="stylesheet" href={{ mix("css/auth_change.css") }} />
  <title>Đổi mật khẩu</title>
</head>
<body>
  @include('includes.navbar')
  @include('auth.partial.password_changing')
  @include('includes.footer')
  <script src={{ mix('js/app.js') }} type="text/javascript"></script>
</body>
</html>

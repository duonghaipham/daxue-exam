<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome 5 icon -->
  <script src="https://kit.fontawesome.com/d3981548c2.js" crossorigin="anonymous"></script>
  <!-- W3.CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href={{ mix("css/app.css") }} />
  <title>Luyện thi xã hội</title>
</head>
<body>
  @include('includes.navbar')
  @include('subject.detail')
  @include('includes.footer')
  <script src={{ mix('js/app.js') }} type="text/javascript"></script>
</body>
</html>

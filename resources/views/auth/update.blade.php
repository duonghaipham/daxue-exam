<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome 5 icon -->
  <script src="https://kit.fontawesome.com/d3981548c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href={{ mix("css/app.css") }} />
  <link rel="stylesheet" href={{ mix("css/auth_view.css") }} />
  <title>Cập nhật thông tin</title>
</head>
<body>
  @include('includes.navbar')
  <div class="profile">
    <div class="profile-container">
      @include('auth.partial.mutual_profile')
      @include('auth.partial.update')
    </div>
  </div>
  @include('includes.footer')
  <script src={{ mix('js/app.js') }} type="text/javascript"></script>
  <script src={{ mix('js/auth_view.js') }} type="text/javascript"></script>
</body>
</html>

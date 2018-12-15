<!DOCTYPE html>
<html>
<head>
  @yield('title')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/bootstrap-css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/body.css" id="ccs_body">
	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/css/faqs.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">



  @yield('links')
</head>

<body>
  @yield('header')

  @yield('main')

  @yield('footer')
  @yield('script')
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/dayNight.js"></script>
  <script src="js/app.js"></script>
  <script src="js/registerValidate.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

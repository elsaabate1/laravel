<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>
<link rel="stylesheet" href="css/bootstrap.min.css"></head>
<body>
    {{View::make('header')}}

    @yield('content')



    {{view::make('footer')}}


    <script src="js/bootstrap.min.js"></script>
   </body>

</html>

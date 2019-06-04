<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
body, html { 
  margin: 0;
  padding:0;
}

.wrapper {
  height: 100vh;
  overflow-x: hidden;
  overflow-y: auto;
  perspective: 1px;
}

.section {
  position: relative;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;
  color: white;
}

.parallax::after {
  content: " ";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: translateZ(-1px) scale(2);
  background-size: 100%;
  z-index: -1;
  background-image: url('http://www.shainblumphoto.com/wp-content/uploads/2016/02/dubai_1.jpg');
}

.content {
  height: 200vh;
  display: flex;
  justify-content: center;
  background: red;
}

        </style>
    </head>
    <body>
    <div class="wrapper">
  <div class="section parallax">
   <h1>Heading</h1>
  </div>
  <div class="content">
    <h1>Site Content</h1>
  </div>
</div>

    </body>
</html>

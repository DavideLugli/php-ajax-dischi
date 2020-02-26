<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- mio style -->
    <link rel="stylesheet" href="dist/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo" />
      </div>
    </header>

<div class="album-container container">
</div>

    <script id="template" type="text/x-handlebars-template">
        <div class="album">
          <img src="{{img_url}}" alt="">
          <h3>{{title}}</h3>
          <span class="author">{{author}}</span>
          <span class="year">{{year}}</span>
        </div>
    </script>
    <script src="dist/script.js" charset="utf-8"></script>
  </body>
</html>

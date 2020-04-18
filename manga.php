<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php include('header.php'); ?>
  
  <div class="container">
    <div class="row" style="margin-bottom: 0;">
      <div class="col s12 m12 l12 offset-l2">
        <img src="" class="responsive-img">

        <!-- <div>
          <button onclick="prevPage()" class="btn blue lighten-1 z-depth-0" style="margin-bottom: 30px; margin-left: 470px;">Prev</button>
          <button onclick="nextPage()" class="btn blue lighten-1 z-depth-0" style="margin-bottom: 30px;">Next</button>
        </div> -->
      </div>
      <div class="col s12 m12 l12 offset-l2" style="margin-bottom: 25px;">
        <button onclick="prevPage()" class="btn blue lighten-1 z-depth-0" >Prev</button>
        <button onclick="nextPage()" class="btn blue lighten-1 z-depth-0">Next</button>
      </div>
    </div>
  </div>

  <script>
    var currentPage = 1;
    var url = `img/chapter-1/${currentPage}.jpg`;

    const image = document.querySelector('img');
    image.src = url;

    function nextPage() {
      currentPage+=1;
      url = `img/chapter-1/${currentPage}.jpg`;
      image.src = url;
    };

    function prevPage() {
      currentPage-=1;
      var url = `img/chapter-1/${currentPage}.jpg`;
      image.src = url;
    };
  </script>

</body>
</html>
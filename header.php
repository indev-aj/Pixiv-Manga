<body>
 <header>
    <nav class="nav-wrapper blue lighten-1 z-depth-0">
      <div class="container">
        <a href="./index.php" class="brand-logo">Pixiv Manga</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="./manga.php">Home</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./register.php">Register</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-links">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./login.php">Login</a></li>
      <li><a href="./register.php">Register</a></li>
    </ul>
  </header>

  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    })
  </script>
</body>
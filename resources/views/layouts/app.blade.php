<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>

<body>
  <nav>
    <div>
      <p>Mayopentrip</p>
      <i class="fas fa-bars nav-icon"></i>
    </div>
    <ul>
      <li>
        <a href="/" class="{{ request()->is('/') ? 'active-link' : '' }}">Beranda</a>
      </li>
      <li>
        <a href="/">Liburan</a>
      </li>
      <li>
        <a href="/">Blog</a>
      </li>
      <li>
        <a href="/">Corporate</a>
      </li>
      <li>
        <a href="/">Bantuan</a>
      </li>
    </ul>
  </nav>

  @yield('content')

  <footer>
    2014-2020 Mayopentrip &#169;
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</body>

</html>
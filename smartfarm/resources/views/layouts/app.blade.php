<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AgriAdapt</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header class="navbar">

    <h1>🌱 AgriAdapt</h1>
    <nav>
      <a href="{{ route('cuaca.index') }}">Cuaca</a>
      <a href="{{ route('rekom.index') }}">Rekomendasi Tanam</a>
    </nav>
  </header>

  <main class="content">
    @yield('content')
  </main>

  <footer class="footer">
    <p>© {{ date('Y') }} AgriAdapt</p>
  </footer>
</body>
</html>

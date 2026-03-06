<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bibliotheca</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Lato:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles-custome.css') }}">
</head>
<body>

  <!-- NAV -->
  <nav class="nav">
    <div class="nav__logo">&#9673; Bibliotheca</div>
    <a href="{{ url('/login') }}" class="btn btn--ghost">Iniciar sesión</a>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <div class="hero__bg-text" aria-hidden="true">LIBROS</div>

    <div class="hero__content">
      <span class="hero__label">Plataforma de gestión</span>
      <h1 class="hero__title">
        El universo de<br>
        <em>tus libros,</em><br>
        ordenado.
      </h1>
      <p class="hero__subtitle">
        Administra tu catálogo de libros y autores desde un solo lugar,
        de forma simple y elegante.
      </p>
      <a href="{{ url('/login') }}" class="btn btn--primary">
        Acceder a la plataforma
        <span class="btn__arrow">→</span>
      </a>
    </div>

    <div class="hero__decoration" aria-hidden="true">
      <div class="book book--1"></div>
      <div class="book book--2"></div>
      <div class="book book--3"></div>
    </div>
  </header>

  <!-- FEATURES -->
  <section class="features">
    <div class="features__grid">

      <div class="feature-card">
        <div class="feature-card__icon">◈</div>
        <h3 class="feature-card__title">Catálogo de libros</h3>
        <p class="feature-card__text">Crea, edita y elimina libros con toda su información de manera intuitiva.</p>
      </div>

      <div class="feature-card">
        <div class="feature-card__icon">◉</div>
        <h3 class="feature-card__title">Gestión de autores</h3>
        <p class="feature-card__text">Administra los autores de tu biblioteca y sus obras relacionadas fácilmente.</p>
      </div>

      <div class="feature-card">
        <div class="feature-card__icon">◎</div>
        <h3 class="feature-card__title">Acceso seguro</h3>
        <p class="feature-card__text">Sistema de autenticación para proteger la información de tu plataforma.</p>
      </div>

    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta">
    <p class="cta__eyebrow">¿Listo para empezar?</p>
    <h2 class="cta__title">Entra y gestiona<br>tu biblioteca hoy.</h2>
    <a href="{{ url('/login') }}" class="btn btn--primary btn--large">
      Iniciar sesión
      <span class="btn__arrow">→</span>
    </a>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <span>&#9673; Bibliotheca</span>
    <span>&copy; {{ date('Y') }} — Todos los derechos reservados</span>
  </footer>

</body>
</html>
<header class="banner h-150 bg-white">
  <a class="brand" href="{{ home_url('/') }}">
    <img class="w-48" src="@asset('images/yuvedo-foundation.png')">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>

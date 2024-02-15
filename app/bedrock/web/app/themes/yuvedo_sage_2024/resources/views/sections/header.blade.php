
<header class="fixed top-12 left-0 w-full  z-50">
  <div class="mx-4 sm:mx-6 lg:mx-8  px-4 sm:px-6 lg:px-8 bg-white rounded-lg">
    <div class="flex justify-between items-center h-24 ">
      <div class="flex-shrink-0">
        <a class="brand" href="{{ home_url('/') }}">
          <img class="w-48" src="@asset('images/yuvedo-foundation.png')">
        </a>
      </div>
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
      <!-- Other content on the right side -->
      <div class="hidden md:block">
        <!-- Other content here -->
      </div>
    </div>
  </div>
</header>

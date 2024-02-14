<footer class="content-info p-8 text-slate-700 bg-gray-300">
  <h3>footer</h3>
    @if (has_nav_menu('footer_navigation'))
    <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
  @php(dynamic_sidebar('footer-widget'))
</footer>

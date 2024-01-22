@php(the_content())
  <h3 class="font-mono red">content-page.blade.php</h3>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<article @php(post_class('h-entry '))>
  <header>
    <h1 class="p-name text-xl py-4 text-amber-300">
      {!! $title !!} 
    </h1>
  </header>

  <div class="e-content bg-white rounded-md">
    <div class="featured-image rounded-t-lg">@php(the_post_thumbnail())</div>

    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
  <h3 class="font-mono text-sky-400">content-single.blade.php</h3>
</article>

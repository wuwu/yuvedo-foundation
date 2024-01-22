<article @php(post_class('mb-16'))>
  <header>
    <h2 class="entry-title text-xl py-4 text-amber-300">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
  </header>

  <div class="entry-summary bg-white rounded-md">
    <div class="featured-image rounded-t-lg">@php(the_post_thumbnail())</div>
    <div class="entry-content p-3">
    @php(the_excerpt())
    </div>
  </div>
    <h3 class="font-mono red">content.blade.php</h3>

</article>

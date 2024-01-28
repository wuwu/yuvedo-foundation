@php
$categories = get_the_category();
$args = array(
    'category' => array( 'category_name' => 'bla' ),
    'post__not_in' => array (get_the_ID()),
);
$projektLoop = new WP_Query( $args );
 

@endphp
<div class="featured-image rounded-t-lg">@php(the_post_thumbnail())</div>
  @php(the_content())
  @php(dynamic_sidebar('primary-widget'))
    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
      @while($projektLoop->have_posts()) @php($projektLoop->the_post())
        @include('partials.content')
      @endwhile
      @while($categories)
        <h1>{{category}}</h1>
      @endwhile
    </div>
<h3 class="font-mono text-sky-400">content-page.blade.php</h3>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

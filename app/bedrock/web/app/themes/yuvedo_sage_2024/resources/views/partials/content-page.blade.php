<div class="e-content bg-white rounded-md p-8">
    <div class="featured-image rounded-t-lg">{!! the_post_thumbnail() !!}</div>
    {!! the_content() !!}

    {!! dynamic_sidebar('primary-widget') !!}
</div>

@php
    $categories = get_the_category();
    $category_id = !empty($categories) ? $categories[0]->term_id : 0;
    $related_posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3, // Adjust the number of posts to display
        'category__in' => [$category_id],
        'post__not_in' => [$post->ID],
    ]);
@endphp

<h1>loop</h1>
<p>Current Category ID: {{ $category_id }}</p>
<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
    @if($related_posts->have_posts())
        <div class="related-posts">
            <h2>Related Posts</h2>
            <ul>
                @while($related_posts->have_posts()) @php $related_posts->the_post() @endphp
                    <li><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></li>
                @endwhile
            </ul>
        </div>
        @php wp_reset_postdata() @endphp
    @endif
</div>

<h3 class="font-mono text-sky-400">content-page.blade.php</h3>

@php
$classes = [
    'post-teaser',
    'bg-white',
    'rounded-lg',
    'p-4'
];
$excerpt = get_the_excerpt();

$excerpt = substr($excerpt, 0, 90);
$theExcerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
@endphp

<article @php post_class($classes) @endphp>
  <a class="text-gray-900" href="<?php the_permalink(); ?>">
    <div class="entry-content flex flex-col justify-center">
      <div class="h-auto w-auto pb-4 md:w-1/1">
        @php if(has_post_thumbnail()) { the_post_thumbnail('full',array('class' => 'project-teaser-image object-cover rounded-lg') ); } @endphp
      </div>
      <h3 class="entry-title pb-4">{!! get_the_title() !!}</h3>
      <p>{{ $theExcerpt}}</p>
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>

    </div>
  </a>
</article>

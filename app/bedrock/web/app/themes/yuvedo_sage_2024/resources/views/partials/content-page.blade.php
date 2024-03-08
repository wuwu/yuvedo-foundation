<div class="rounded-3xl px-4 md:px-8 lg:px-24 py-4 md-py-8 lg:py-12">
  @if(has_post_thumbnail())
    <div class="featured-image rounded-3xl">
      @php { the_post_thumbnail('full',array('class' => 'rounded-lg object-cover w-full pb-8') ); } @endphp
    </div>
  @endif
    {!! the_content() !!}

    {!! dynamic_sidebar('primary-widget') !!}
</div>

<p class="font-mono text-alertinfodark">Current Category ID: {{ $category_id }}</p>
<h3 class="font-mono text-alertinfodark">content-page.blade.php</h3>

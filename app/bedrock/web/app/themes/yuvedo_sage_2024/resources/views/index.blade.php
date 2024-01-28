@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
  <div class="container m-auto grid lg:grid-cols-3 lg:gap-8">
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
    <h3 class="font-mono text-sky-400">index.blade.php</h3>

@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection

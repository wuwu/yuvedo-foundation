<header class="fixed top-12 left-0 w-full  z-50">
  <div class="mx-4 sm:mx-6 lg:mx-8  px-4 sm:px-6 lg:px-8 opacity-90 bg-white  rounded-lg">
    <div class="flex justify-between items-center h-24 ">
      <div class="flex-shrink-0">
        <a class="brand" href="{{ home_url('/') }}">
          <img class="w-48" src="@asset('images/yuvedo-foundation.png')">
        </a>
      </div>
      @if (has_nav_menu('primary_navigation'))
        @include('partials.navigation')
      @endif
        @php(dynamic_sidebar('header-widget'))

        <div x-show="open" @click.away="open = false
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="absolute top-16 right-4 bg-white border-1 border-gray-300 rounded-lg p-2 z-50">
            <!-- Menu Items -->
          @if (has_nav_menu('primary_navigation'))
            @include('partials.navigation-mobile')
          @endif

        </div>
        <button @click="toggle" class="bg-none border-none">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
    </div>
  </div>
</header>

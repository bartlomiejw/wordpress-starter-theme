<div class="container mx-auto">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

  <main id="main" class="py-8 main">
    @yield('content')
  </main>


  @hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
  @endif

  @include('partials.footer')
</div>
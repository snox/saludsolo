<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
  <div class="container">
    <div class="collapse navbar-collapse navMenu justify-content-between">
      <div class="d-flex justify-content-end justify-content-lg-start pt-1 pt-lg-0">

          <div>
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <a class="text-white" style="margin-right: 1.2em;" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{--<span class="flag-icon flag-icon-{{ $localeCode }} flag-icon-squared"></span> --}}{{ $properties['native'] }}
                  </a>
              @endforeach
          </div>
      </div>

      {{--  <div class="py-1 d-flex align-items-center justify-content-end">
        <button class="btn btn-primary btn-sm">Login</button>
      </div>  --}}
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-main sticky-top">
  <div class="container">
    <a class="navbar-brand navbar-logo" href="/{{ LaravelLocalization::getCurrentLocale() }}">
      SaludSolo
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end navMenu">
{{--      <ul class="navbar-nav">--}}
{{--        @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])--}}
{{--      </ul>--}}
      <ul class="navbar-nav">
        <li class="nav_item active">
          <a class="nav-link h5" href="/{{ LaravelLocalization::getCurrentLocale() }}">
            Home
          </a>
        </li>
        <li class="nav_item">
          <a class="nav-link h5" href="/{{ LaravelLocalization::getCurrentLocale() }}/products">
            Products
          </a>
        </li>
        <li class="nav_item">
          <a class="nav-link h5" href="/{{ LaravelLocalization::getCurrentLocale() }}/contact">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>
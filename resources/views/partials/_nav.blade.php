<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
  <div class="container">
    <div class="collapse navbar-collapse navMenu justify-content-between">
      <div class="d-flex justify-content-end justify-content-lg-start pt-1 pt-lg-0">
        <div class="dropdown">
          <button class="btn dropdown-toggle btn-dark btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
          </button>
          <div class="dropdown-menu">
            <ul>
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li>
                      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['native'] }}
                      </a>
                  </li>
              @endforeach
          </ul>
          </div>
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
    <a class="navbar-brand navbar-logo" href="/">
      SaludSolo
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end navMenu">
      <ul class="navbar-nav">
        @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>
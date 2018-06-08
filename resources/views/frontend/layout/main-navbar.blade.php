<nav class="navbar navbar-expand-md navbar-light fixed-top navbar-main-menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('frontend.home') }}">
            {{ config('app.name', 'Laravel') }} Frontend
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.leaflet') }}">Leaflet</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ ucfirst(LaravelLocalization::getCurrentLocale()) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ ucfirst($properties['native']) }}
                            </a>
                        @endforeach
                    </div>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.login.get') }}">{{ trans('app.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.register.get') }}">{{ trans('app.register') }}</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('renter.home') }}">{{ __('Espace Loueur') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('school.home') }}">{{ __('Espace Ecole') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Admin Operateur') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('frontend.logout.post') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('frontend.logout.post') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
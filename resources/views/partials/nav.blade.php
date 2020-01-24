<ul>
    <li><a href="{{ route('Home') }}">Home</a></li>
{{--    <li><a href="{{ route('Hallo', ['naam' => 'Naam']) }}">Hallo</a></li>--}}
{{--    <li><a href="{{ route('Contact') }}">Contact</a></li>--}}
    <li><a href="{{ route('Over') }}">Over</a></li>
{{--    <li><a href="{{ route('bedrijven.list') }}">Bedrijven</a></li>--}}
    <li><a href="{{ route('CMS') }}">CMS</a></li>
    @guest
        <li>
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li>
            <div aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>

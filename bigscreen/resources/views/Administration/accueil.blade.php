<a href="{{ route('logout') }}"
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Log Out') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST"
        style="display: none;">
 @csrf
</form>
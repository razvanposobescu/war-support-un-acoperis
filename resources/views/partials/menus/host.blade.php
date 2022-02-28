<a class="dropdown-item" href="{{ route('host.profile', ['locale' => app()->getLocale()]) }}">
    <i class="fa fa-wrench"></i> {{ __('Administration Panel') }}
</a>
<a class="dropdown-item" href="{{ route('host.profile') }}">
    {{ __('My Profile') }}
</a>

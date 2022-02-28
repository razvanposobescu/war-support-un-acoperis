<a class="dropdown-item" href="{{ route('admin.dashboard', ['locale' => app()->getLocale()]) }}">
    <i class="fa fa-wrench"></i> {{ __('Administration Panel') }}
</a>
<a class="dropdown-item" href="{{ route('admin.profile') }}">
    {{ __('My Profile') }}
</a>

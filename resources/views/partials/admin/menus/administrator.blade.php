<a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
    <i class="fa fa-pie-chart mr-3"></i>Dashboard
</a>

<a href="{{ route('admin.clinic-list') }}" class="d-none list-group-item list-group-item-action {{ Route::currentRouteName() == 'admin.clinic-list' ? 'active' : '' }}">
    <i class="fa fa-plus-square mr-3"></i>Lista Clinici
</a>

<a href="{{ route('admin.clinic-add') }}" class="list-group-item list-group-item-action sub-list {{ Route::currentRouteName() == 'admin.clinic-add' ? 'active' : '' }}">
    <i class="fa fa-plus-square invisible mr-3"></i>Adauga o clinica
</a>


<a href="{{ route('admin.clinic-category-list') }}" class="list-group-item list-group-item-action sub-list {{ in_array(Route::currentRouteName(), ['admin.clinic-category-list', 'admin.clinic-category-add', 'admin.clinic-category-edit']) ? 'active' : '' }}">
    <i class="fa fa-plus-square invisible mr-3"></i>Categorii clinici
</a>

<a href="{{ route('admin.help-list') }}" class="list-group-item list-group-item-action {{ in_array(Route::currentRouteName(), ['admin.help-list', 'admin.help-detail']) ? 'active' : '' }}">
    <i class="fa fa-exclamation-triangle mr-3"></i>Cereri de ajutor
</a>

<a href="{{ route('admin.resource-list') }}" class="list-group-item list-group-item-action {{ in_array(Route::currentRouteName(), ['admin.resource-list', 'admin.resource-detail']) ? 'active' : '' }}">
    <i class="fa fa-book mr-3"></i>Resurse ajutor
</a>
<a href="{{ route('admin.accommodation-list') }}" class="list-group-item list-group-item-action sub-list {{ in_array(Route::currentRouteName(), ['admin.accommodation-list', 'admin.accommodation-detail']) ? 'active' : '' }}">
    <i class="fa fa-plus-square invisible mr-3"></i>Spatii de cazare
</a>

<a href="{{ route('admin.host-add') }}" class="list-group-item list-group-item-action sub-list {{ in_array(Route::currentRouteName(), ['admin.host-add', 'admin.host-detail']) ? 'active' : '' }}">
    <i class="fa fa-plus-square invisible mr-3"></i>Adauga o gazda
</a>
<a href="{{ route('admin.profile') }}" class="list-group-item list-group-item-action {{ in_array(Route::currentRouteName(), ['admin.profile', 'admin.edit-profile', 'admin.reset-password']) ? 'active' : '' }}">
    <i class="fa fa-user mr-3"></i>Profilul meu
</a>
<a class="list-group-item list-group-item-action {{ in_array(Route::currentRouteName(), ['admin.auditLogs.index', 'admin.auditLogs.show']) ? 'active' : '' }}" href="{{ route('admin.auditLogs.index') }}">
    <i class="fa fa-list mr-3"></i>{{ __('Audit logs') }}
</a>
<a class="list-group-item list-group-item-action {{ in_array(Route::currentRouteName(), ['admin.loginLogs.index']) ? 'active' : '' }}" href="{{ route('admin.loginLogs.index') }}">
    <i class="fa fa-list mr-3"></i>{{ __('Login logs') }}
</a>

@php
    $icons = [
        'settings' => 'icon-settings' ,
        'sliders' => 'icon-layout' ,
        'services' => 'icon-award' ,
        'subservices' => 'icon-award' ,
        'joint-ventures' => 'icon-zap' ,
        'team-members' => 'icon-users' ,
        'posts' => 'icon-edit' ,
        'reviews' => 'icon-star' ,
        'gallery' => 'icon-image' ,
        'clients' => 'icon-user' ,
        'categories' => 'icon-bookmark' ,
        'faq' => 'icon-help-circle' ,
    ];
    
    $routes = [
        'settings' =>  route('dashboard.settings.edit') ,
        'sliders' => route('dashboard.sliders.index') ,
        'services' => route('dashboard.services.index') ,
        'subservices' =>  route('dashboard.subservices.index') ,
        'joint-ventures' =>  route('dashboard.joint-ventures.index') ,
        'team-members' => '#' ,
        'posts' => '#' ,
        'reviews' => '#' ,
        'gallery' => '#' ,
        'clients' => '#' ,
        'categories' => '#' ,
        'faq' => '#' ,
    ];
@endphp

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach (__('dashboard.navItems') as $key => $value)
                <li class=" nav-item {{ url()->current() ==  $routes[$key] ? 'active' : '' }}"><a href="{{ $routes[$key] }}"><i class="feather {{ $icons[$key] }}"></i><span class="menu-title" data-i18n="{{ $value }}"> {{ $value }} </span></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

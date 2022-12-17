@include('admin-dashboard.parts.start')

<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    {{-- sidebar --}}
    @include('admin-dashboard.parts.sidebar')

    @yield('content')
</div>
@include('admin-dashboard.parts.end')

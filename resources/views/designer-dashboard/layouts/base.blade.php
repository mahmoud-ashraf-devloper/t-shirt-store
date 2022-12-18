@include('admin-dashboard.parts.start')

<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    {{-- sidebar --}}
    @include('admin-dashboard.parts.sidebar')
    <div class="flex flex-col flex-1 w-full">
        @include('admin-dashboard.parts.navbar')
        @yield('content')
    </div>
</div>
@include('admin-dashboard.parts.end')

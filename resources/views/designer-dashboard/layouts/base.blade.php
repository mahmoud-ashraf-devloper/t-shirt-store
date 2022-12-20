@include('designer-dashboard.parts.start')

<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    {{-- sidebar --}}
    @include('designer-dashboard.parts.sidebar')
    <div class="flex flex-col flex-1 w-full">
        @include('designer-dashboard.parts.navbar')
        @yield('content')
    </div>
</div>
@include('designer-dashboard.parts.end')

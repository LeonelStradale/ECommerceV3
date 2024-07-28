@php
    $links = [
        [
            // Dashboard
            'name' => 'Dashboard',
            'icon' => 'fa-solid fa-house',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],
        [
            // Family
            'name' => 'Familias',
            'icon' => 'fa-solid fa-box-open',
            'route' => route('admin.families.index'),
            'active' => request()->routeIs('admin.families.*'),
        ],
    ];
@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-56 h-[100dvh] pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-900 dark:border-gray-700"
    :class="{
        'translate-x-0 ease-out': sidebarOpen,
        '-translate-x-full ease-in': !sidebarOpen
    }"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-900">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['route'] }}"
                        class="flex items-center p-2 text-gray-900 dark:text-white rounded-lg group {{ $link['active'] ? 'text-white bg-primary-600 dark:bg-primary-700' : 'hover:bg-primary-200 dark:hover:bg-primary-900' }}">
                        <span class="inline-flex w-8 h-8 justify-center items-center">
                            <i
                                class="{{ $link['icon'] }} {{ $link['active'] ? 'text-white' : 'text-gray-900 dark:text-white' }}"></i>
                        </span>
                        <span class="ml-2">
                            {{ $link['name'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>

@php
    use App\Enums\FontAwesomeIcon;
@endphp

<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Familias',
        'route' => route('admin.families.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">

    <x-slot name="action">
        <a href="{{ route('admin.families.index') }}"
            class="text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 shadow-2xl">
            <i class="fa-solid fa-arrow-rotate-left mr-1"></i>
            {{ __('Go back') }}
        </a>
    </x-slot>

    <x-form-card width="sm:max-w-full">

        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            <i class="fa-solid fa-box-open mr-1"></i>
            {{ __('Add new product family') }}
        </h1>

        <form action="{{ route('admin.families.store') }}" method="POST">
            @csrf

            <x-validation-errors class="mb-4" />

            <div class="mb-4">
                <x-label for="name" class="mb-2">
                    <i class="fa-solid fa-box mr-1"></i>
                    {{ __('Name') }}
                </x-label>
                <x-input id="name" class="w-full" placeholder="Enter the name of the product family" name="name"
                    autofocus required value="{{ old('name') }}" />
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="col-span-2">
                    <x-label for="icon-select" class="mb-2">
                        <i class="fa-solid fa-icons mr-1"></i>
                        {{ __('Icons') }}
                    </x-label>
                    <select id="icon-select" name="icon" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected disabled>
                            {{ __('Select an icon') }}
                        </option>
                        @foreach (FontAwesomeIcon::cases() as $icon)
                            <option value="{{ $icon->icon() }}">
                                <i class="{{ $icon->icon() }}"></i> {{ $icon->value }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-1">
                    <x-label class="mb-2">
                        <i class="fa-solid fa-eye mr-1"></i>
                        {{ __('Icon preview') }}
                    </x-label>
                    <div id="icon-preview"
                        class="h-[46px] p-2.5 border border-gray-300 rounded-lg bg-gray-100 dark:bg-gray-700 dark:border-gray-600">
                        <span id="icon-preview-content" class="text-gray-900 dark:text-white"></span>
                    </div>
                </div>
            </div>

            <x-button class="w-full mt-2">
                <i class="fa-solid fa-floppy-disk mr-1"></i>
                Guardar
            </x-button>
        </form>
    </x-form-card>

</x-admin-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const iconSelect = document.getElementById('icon-select');
        const iconPreview = document.getElementById('icon-preview-content');

        iconSelect.addEventListener('change', function() {
            const selectedIcon = iconSelect.value;
            iconPreview.innerHTML = `<i class="fa-solid ${selectedIcon}"></i>`;
        });
    });
</script>

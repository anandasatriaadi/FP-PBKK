<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Menus') }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap">
            <x-user.menu-card></x-user.menu-card>
            <x-user.menu-card></x-user.menu-card>
            <x-user.menu-card></x-user.menu-card>
            <x-user.menu-card></x-user.menu-card>
            <x-user.menu-card></x-user.menu-card>
        </div>
    </div>
</x-layouts.app>
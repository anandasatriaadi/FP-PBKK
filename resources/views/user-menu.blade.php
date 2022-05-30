<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Menus') }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-7xl w-full px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap">
            @foreach ($menus as $menu)
                <x-user.menu-card :id="$menu->id" :bgimage="$menu->image" :title="$menu->name" :price="$menu->price"></x-user.menu-card>
            @endforeach
        </div>
    </div>
    @if (session("status"))
        <script>
            toastr["success"]("{{ session('msg') }}")
        </script>
    @endif
</x-layouts.app>
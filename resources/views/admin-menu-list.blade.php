<x-layouts.dashboard :title="__('Menus List')">
    <x-slot:buttonSection>
        <a class="block py-1 px-2 flex-1 bg-sky-300 hover:bg-sky-400 focus:ring-sky-500 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer" href={{ route("adminAddMenu") }}>
            + Add New Menu
        </a>
    </x-slot:buttonSection>
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            @foreach ($menus as $menu)
            <x-staff.menu-list-card :id="$menu->id" :bgimage="$menu->image" :title="$menu->name" :description="$menu->description"></x-staff.menu-list-card>
            @endforeach
        </div>
    </div>
</x-layouts.dashboard>
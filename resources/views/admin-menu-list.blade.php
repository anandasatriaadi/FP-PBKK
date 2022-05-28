<x-layouts.dashboard :title="__('Menus List')">
    <x-slot:buttonSection>
        <a class="block py-1 px-2 flex-1 bg-sky-600 hover:bg-sky-700 focus:ring-sky-500 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg  cursor-pointer" href={{ route("adminAddMenu") }}>
            + Add New Menu
        </a>
    </x-slot:buttonSection>
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <x-staff.menu-list-card></x-staff.menu-list-card>
            <x-staff.menu-list-card></x-staff.menu-list-card>
            <x-staff.menu-list-card></x-staff.menu-list-card>
            <x-staff.menu-list-card></x-staff.menu-list-card>
            <x-staff.menu-list-card></x-staff.menu-list-card>
            <x-staff.menu-list-card></x-staff.menu-list-card>
        </div>
    </div>
</x-layouts.dashboard>
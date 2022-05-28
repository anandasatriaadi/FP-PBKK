<x-layouts.dashboard :title="__('Active Orders List')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
            <x-staff.order-list-card></x-staff.order-list-card>
        </div>
    </div>
</x-layouts.dashboard>
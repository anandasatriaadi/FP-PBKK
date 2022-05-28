<x-layouts.dashboard :title="__('Reservations List')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card :status="true"></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
            <x-staff.reservation-card></x-staff.reservation-card>
        </div>
    </div>
</x-layouts.dashboard>
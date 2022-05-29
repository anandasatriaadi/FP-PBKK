<x-layouts.dashboard :title="__('Reservations List')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            @foreach ($reservations as $reservation)
            <x-staff.reservation-card :id="$reservation->id" :status="$reservation->status" :table="$reservation->table_id" :name="$reservation->name"></x-staff.reservation-card>
            @endforeach
        </div>
    </div>
</x-layouts.dashboard>
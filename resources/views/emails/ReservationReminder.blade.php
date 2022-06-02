@component('mail::message')
# Reminder of your reservation at Kelompok 5 Restaurant

We would like to remind you that you have a reservation at our restaurant at {{ $date }}.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

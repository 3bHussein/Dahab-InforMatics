@component('mail::message')
# Hello {{$data['name']}} this is Egy-x Organization

Thank you for contacting us , we will contact you shortly.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

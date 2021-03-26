@component('mail::message')
# This is a contact E-mail from {{$data['email']}}
Name : {{$data['name']}}
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent

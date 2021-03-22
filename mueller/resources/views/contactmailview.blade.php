@component('mail::message')
    # This is a contact E-mail from
    name : {{ $data['name'] }}

    <br>
    Message :
    {{ $data['message'] }}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

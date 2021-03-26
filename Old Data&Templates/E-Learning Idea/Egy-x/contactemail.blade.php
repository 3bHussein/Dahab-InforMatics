@component('mail::message')
# This is a contact E-mail from {{$data['email']}}
Name : {{$data['name']}}
<br>
Phone : {{$data['phone']}}
<br>
Message :
{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

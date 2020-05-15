@component('mail::message')
# Hey le naz

- {{$messageSend->name}}
- {{$messageSend->email}}
@component('mail::panel')
{{$messageSend->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

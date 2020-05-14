@component('mail::message')
# Hey le naz

- {{$name}}
- {{$email}}
@component('mail::panel')
{{$messageSend}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

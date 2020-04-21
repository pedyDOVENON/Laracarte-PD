@component('mail::message')
# Hello Admin

-{{$msg->name}} <br>
-{{$msg->email}}

@component('mail::panel')
{{$msg->msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

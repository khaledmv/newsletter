@component('mail::message')
# Email 


{{$data->email}}

Thank you for subscribe our mail

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

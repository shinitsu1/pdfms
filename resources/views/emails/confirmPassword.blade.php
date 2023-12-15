@component('mail::message')
# Change Password

Please click the button below to change your password:

@component('mail::button', ['url' => $confirmationLink])
Change Password
@endcomponent

Thank you,
{{ config('app.name') }}
@endcomponent

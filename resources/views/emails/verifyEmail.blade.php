@component('mail::message')
    # Verify Email

    Tu código es {{ $pin }}

    Please do not share your One Time Code With Anyone.

    Thanks,
    {{ config('app.name') }}
@endcomponent

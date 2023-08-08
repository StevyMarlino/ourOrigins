@component('mail::message')
    @if (isset($data['body']))
        # Introduction

        {{ $data['body'] }}
    @endif

    # Information of user

    Name : {{ $data['name'] }}
    Email : {{ $data['email'] }}
    Whatsapp Number : {{ $data['phone'] }}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

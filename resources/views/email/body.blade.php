@component('mail::message')

<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Message:</strong></p>
{{ $message }}
@endcomponent

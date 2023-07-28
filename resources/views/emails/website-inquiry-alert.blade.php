<x-mail::message>
# Hi there!

Someone just reached out through the CCC website. Please login to your account to see their message.

<a href="{{ route('login') }}" class="inline-block text-ccc my-2">
Login to CCC
</a>
<br>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

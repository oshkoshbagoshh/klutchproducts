<x-mail::message>
# You're Invited!

Hello!

You've been invited by {{ $inviterName }} to join our community. We're excited to have you on board!

Our platform offers:
- Exclusive access to products
- Special member discounts
- Early access to new features
- Community support

<x-mail::button :url="$inviteUrl">
Join Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

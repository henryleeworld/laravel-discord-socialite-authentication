<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ trans('global.verify_email.statement.thanks_for_signing_up') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ trans('global.verify_email.statement.a_new_verification_link') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="/email/verification-notification">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ trans('global.verify_email.content.resend_verification_email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="/logout">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ trans('global.verify_email.content.logout') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
         {{ trans('profile.update_password.title') }}
    </x-slot>

    <x-slot name="description">
        {{ trans('profile.update_password.content.ensure_your_account') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ trans('profile.update_password.content.current_password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ trans('profile.update_password.content.new_password') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ trans('profile.update_password.content.confirm_password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ trans('profile.update_password.content.saved') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ trans('profile.update_password.content.save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

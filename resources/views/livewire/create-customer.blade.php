<x-jet-authentication-card>
    <x-slot name="logo">
        <x-jet-application-logo />
    </x-slot>

    <div class="flex justify-center font-black text-4xl mb-2">Create Customer</div>
    @isset($message)

    <div class="text-red-600 mb-2">{{ $message }}</div>
    @endisset
    <form wire:submit.prevent="create">
        @csrf

        <div>
            <x-jet-label for="first_name" value="{{ __('First Name') }}" />
            <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" wire:model="first_name"
                required autofocus autocomplete="first_name" />
            @error('first_name') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
            <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" wire:model="last_name"
                required autocomplete="last_name" />
            @error('last_name') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email Address') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" wire:model="email" required
                autocomplete="email" />
            @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                <span wire:loading wire:target="create">Please wait...</span>
                <span wire:loading.remove wire:target="create">{{ __('Create Customer') }}</span>
            </x-jet-button>
        </div>
    </form>
</x-jet-authentication-card>

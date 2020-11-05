<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between py-4">
                <div class="flex justify-center font-black text-4xl">Top Customers</div>
                <a href="{{ route('create-customer') }}">
                    <x-jet-button>Create new</x-jet-button>
                </a>
            </div>
            <livewire:customer />
        </div>
    </div>
</x-app-layout>

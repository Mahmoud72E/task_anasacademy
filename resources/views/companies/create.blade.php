<x-app-layout>
    <x-slot name="header">
        {{ __('Create Company') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Name') }}:
                </label>
                <input type="text" name="name" id="name" class="form-input w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Email') }}:
                </label>
                <input type="email" name="email" id="email" class="form-input w-full" required>
            </div>

            <div class="mb-4">
                <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Logo') }}:
                </label>
                <input type="file" name="logo" id="logo" class="form-input w-full" accept="image/*" required>
            </div>

            <div class="mb-4">
                <label for="website" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Website') }}:
                </label>
                <input type="url" name="website" id="website" class="form-input w-full" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    {{ __('Create') }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

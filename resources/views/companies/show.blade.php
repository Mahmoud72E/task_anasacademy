<x-app-layout>
    <x-slot name="header">
        {{ __('Company Details') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="mb-4">
            <h2 class="text-lg font-bold mb-2">{{ $company->name }}</h2>
            <p class="text-gray-600">{{ __('Email') }}: {{ $company->email }}</p>
            <p class="text-gray-600">{{ __('Website') }}: <a href="{{ $company->website }}" target="_blank" class="text-blue-500 hover:text-blue-700">{{ $company->website }}</a></p>
            @if ($company->logo)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" class="w-40 h-40 rounded-full">
                </div>
            @endif
        </div>
        <div class="flex items-center justify-end">
            <a href="{{ route('companies.edit', $company) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">{{ __('Edit') }}</a>
            <form class="ml-2 inline-block" action="{{ route('companies.destroy', $company) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">{{ __('Delete') }}</button>
            </form>
        </div>
    </div>
</x-app-layout>

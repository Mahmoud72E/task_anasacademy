<x-app-layout>
    <x-slot name="header">
        {{ __('Employee Details') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="mb-4">
            <p class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('First Name') }}:
            </p>
            <p class="text-gray-900">{{ $employee->first_name }}</p>
        </div>

        <div class="mb-4">
            <p class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Last Name') }}:
            </p>
            <p class="text-gray-900">{{ $employee->last_name }}</p>
        </div>

        <div class="mb-4">
            <p class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Company') }}:
            </p>
            <p class="text-gray-900">{{ $employee->company->name }}</p>
        </div>

        <div class="mb-4">
            <p class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Email') }}:
            </p>
            <p class="text-gray-900">{{ $employee->email }}</p>
        </div>

        <div class="mb-4">
            <p class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Phone') }}:
            </p>
            <p class="text-gray-900">{{ $employee->phone }}</p>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('employees.edit', $employee) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                {{ __('Edit') }}
            </a>
        </div>
    </div>
</x-app-layout>

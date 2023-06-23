<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Employee') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <form action="{{ route('employees.update', $employee) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('First Name') }}:
                </label>
                <input type="text" name="first_name" id="first_name" class="form-input w-full" value="{{ $employee->first_name }}" required>
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Last Name') }}:
                </label>
                <input type="text" name="last_name" id="last_name" class="form-input w-full" value="{{ $employee->last_name }}" required>
            </div>

            <div class="mb-4">
                <label for="company_id" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Company') }}:
                </label>
                <select name="company_id" id="company_id" class="form-select w-full" required>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Email') }}:
                </label>
                <input type="email" name="email" id="email" class="form-input w-full" value="{{ $employee->email }}" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Phone') }}:
                </label>
                <input type="text" name="phone" id="phone" class="form-input w-full" value="{{ $employee->phone }}" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

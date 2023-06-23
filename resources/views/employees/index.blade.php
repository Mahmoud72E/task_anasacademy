<x-app-layout>
    <x-slot name="header">
        {{ __('Employees') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">

        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                            <th class="px-4 py-3">{{ __('First Name') }}</th>
                            <th class="px-4 py-3">{{ __('Last Name') }}</th>
                            <th class="px-4 py-3">{{ __('Company') }}</th>
                            <th class="px-4 py-3">{{ __('Email') }}</th>
                            <th class="px-4 py-3">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($employees as $employee)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $employee->first_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $employee->last_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $employee->company->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $employee->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('employees.edit', $employee) }}"
                                        class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <form class="inline-block"
                                        action="{{ route('employees.destroy', $employee) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                    </form>
                                    <a href="{{ route('employees.show', $employee) }}" class="text-blue-500 hover:text-blue-700">{{ __('View') }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $employees->links() }}
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('employees.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                {{ __('Create New Employee') }}
            </a>
        </div>

    </div>
</x-app-layout>

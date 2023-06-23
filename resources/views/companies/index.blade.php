<x-app-layout>
    <x-slot name="header">
        {{ __('Companies') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">

        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Logo</th>
                            <th class="px-4 py-3">Website</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($companies as $company)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $company->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $company->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo"
                                        class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('companies.edit', $company) }}"
                                        class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <form class="inline-block"
                                        action="{{ route('companies.destroy', $company) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this company?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                    </form>
                                    <a href="{{ route('companies.show', $company) }}" class="text-blue-500 hover:text-blue-700">{{ __('View') }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $companies->links() }}
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('companies.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                {{ __('Create New Company') }}
            </a>
        </div>

    </div>
</x-app-layout>

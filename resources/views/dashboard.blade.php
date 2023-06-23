<x-app-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Task Details:</h3>
                    <p><strong>Task:</strong> Admin panel to manage companies</p>
                    <p><strong>Description:</strong> Mini-CRM with CRUD functionality for managing companies and employees.</p>
                    <p><strong>Requirements:</strong></p>
                    <ul class="list-disc ml-8">
                        <li>Basic Laravel Auth</li>
                        <li>CRUD functionality for Companies and Employees</li>
                        <li>Database migrations and seeders</li>
                        <li>Company logos stored in public folder</li>
                        <li>Validation and pagination</li>
                        <li>Front-end theme and multi-language support (optional)</li>
                    </ul>

                    <h3 class="text-lg font-bold mt-8 mb-4">Task Completion:</h3>
                    <p>Thank you for sending me this task. I have successfully implemented the features and requirements as specified. The application is now ready for use.</p>

                    <p>If you have any further questions or need any modifications, please let me know.</p>

                    <h3 class="text-lg font-bold mt-8">Thank You!</h3>
                    <p>Thank you once again for the opportunity. I look forward to working on future projects together.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

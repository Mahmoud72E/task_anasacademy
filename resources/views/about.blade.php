<x-app-layout>
    <x-slot name="header">
        {{ __('About Me') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">About Me</h3>
                    <p>Hi, I'm Mahmoud Mohamed, a professional web developer with 2 years of experience. I specialize in PHP Laravel development and have worked on various projects ranging from small business websites to large-scale web applications.</p>
                    <p>I have a strong passion for creating efficient and scalable solutions, and I'm always eager to learn and explore new technologies.</p>

                    <h3 class="text-lg font-bold mt-8 mb-4">My Website</h3>
                    <p>Feel free to visit my website to learn more about my work and portfolio:</p>
                    <a href="https://mahmoudelectron.neocities.org/" class="text-blue-500 hover:underline">{{ 'https://mahmoudelectron.neocities.org/' }}</a>

                    <h3 class="text-lg font-bold mt-8">Get in Touch</h3>
                    <p>If you have any questions or would like to discuss a project, please don't hesitate to reach out to me. You can contact me through the contact via email at mahmoud201411hotmailcom@gmail.com .</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

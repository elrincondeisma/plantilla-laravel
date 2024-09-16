<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <img src="/assets/images/banner.jpg" alt="Banner" class="w-full h-auto">
                <div class="p-8">
                    <span class="font-black text-2xl text-gray-500 font-mono mb-4 dark:text-neutral-400">Redes Sociales</span>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-youtube" :url="'https://www.youtube.com/@elrincondeisma?sub_confirmation=1'" :title="'Canal Principal El Rincón de Isma'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-youtube" :url="'https://www.youtube.com/@elrincondeismalive?sub_confirmation=1'" :title="'Canal Secundario El Rincón de Isma - Live'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-twitch" :url="'https://www.twitch.tv/elrincondeismaoficial'" :title="'Canal de Twitch El Rincón de Isma'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-github" :url="'https://github.com/elrincondeisma'" :title="'Github'" />
                    </ul>
                    <ul class="list-disc list-inside text-gray-800 dark:text-white mt-4">
                        <x-li-social-component icon="tabler-brand-discord" :url="'https://discord.com/invite/meZU65c67e'" :title="'Únete a nuestro Discord'" />
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

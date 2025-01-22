<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 bg-blue-900 flex flex-col md:flex-row items-center">
                    <!-- Texte en haut sur mobile, à gauche sur desktop -->
                    <div class="w-full md:w-1/2 md:pr-6 mb-6 md:mb-0">
                        <h2 class="font-semibold text-2xl text-white dark:text-gray-200 leading-tight">
                            L'Entreprise Boucq accompagne les Entreprises et les particuliers à révéler leur pouvoir créateur grâce à la Physique Spiritualité
                        </h2>
                        <p class="mt-4 text-white">
                            Des contenus pour les particuliers et les entreprises, vous permettant d'apprendre et de pratiquer: le bien être et développer des capacités inexploitées encore jamais exploitées en conscience.
                            <br>
                            Copyright
                        </p>
                    </div>

                    <!-- Image en bas sur mobile, à droite sur desktop -->
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                        <img src="{{ asset('img/66e7e4c611904_ImagePatricia.png')}}" alt="image" class="w-80 h-80">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
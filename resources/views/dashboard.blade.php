<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 ">
                <div class="text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                <x-form post :action="route('question.store')">
                    <x-textarea label="Question" name="question" />

                    <x-btn.primary> Save </x-btn.primary>

                    <x-btn.reset> Cancel </x-btn.reset>

                </x-form>
            </div>
        </div>
    </x-container>
</x-app-layout>

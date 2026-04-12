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

                <hr class=" border-gray-700 border-dashed my-8">

                {{--Listagem --}}
                <div class="dark:text-gray-400 uppercase font-bold mb-4">List of Questions </div>

                <div class="dark:text-gray-400 space-y-4">
                    @foreach($questions as $item)
                        <x-question :question="$item" />
                    @endforeach
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>

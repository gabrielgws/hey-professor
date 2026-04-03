<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                    <div class="text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                    <form action="{{ route('question.store') }}" method="POST" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-4">
                            <label for="question" class="block mb-2.5 text-sm font-medium text-heading">
                                Question
                            </label>
                            <textarea name="question" id="question" rows="4"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body"
                                placeholder="Ask me anything...">{{ old('question') }}</textarea>

                            @error('question')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Save
                        </button>

                        <button type="reset" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Cancel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

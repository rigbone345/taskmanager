<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Create Task
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block">Title</label>
                <input
                    type="text"
                    name="title"
                    class="border w-full p-2"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block">Description</label>
                <textarea
                    name="description"
                    class="border w-full p-2"
                ></textarea>
            </div>

            <button
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded"
            >
                Save
            </button>
        </form>
    </div>
</x-app-layout>

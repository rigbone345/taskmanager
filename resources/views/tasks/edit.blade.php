<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Edit Task
        </h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block mb-1 font-medium">
                    Title
                </label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="{{ $task->title }}"
                    class="border px-3 py-2 w-full rounded"
                    required
                >
            </div>

            <button
                type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded"
            >
                Update Task
            </button>
        </form>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Tasks
        </h2>
    </x-slot>

    <div class="container mx-auto p-4">

        <a href="{{ route('tasks.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
            Add New Task
        </a>

        @if ($tasks->count())
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Title</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="border px-4 py-2">{{ $task->id }}</td>
                            <td class="border px-4 py-2">{{ $task->title }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('tasks.edit', $task) }}"
                                   class="bg-yellow-400 text-white px-2 py-1 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('tasks.destroy', $task) }}"
                                      method="POST"
                                      class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-2 py-1 rounded"
                                            type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No tasks found.</p>
        @endif

    </div>
</x-app-layout>

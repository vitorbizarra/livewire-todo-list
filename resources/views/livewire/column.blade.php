<div>
    <livewire:column-heading :title="$title" />
    @foreach ($tasks as $task)
    <div
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-4 transition ease-in-out">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::title($task->title) }}</h5>
        <p class="mb-2 text-gray-900 dark:text-slate-400">{{ $task->deadline->format('d/m/Y') }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $task->description }}</p>
    </div>
    @endforeach
</div>
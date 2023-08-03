<div class="py-8">
    <form wire:submit="save">
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" wire:model.lazy="form.title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('form.title')
                    <div class="text-red-600 bg-red-300 p-2 mt-2 rounded">{{$errors->first('form.title')}}</div>
                @enderror
        </div>
        <div class="mb-6">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea type="text" id="description" wire:model.lazy="form.description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                @error('form.description')
                    <div class="text-red-600 bg-red-300 p-2 mt-2 rounded">{{$errors->first('form.description')}}</div>
                @enderror
        </div>
        <div class="mb-6">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <select id="status" wire:model.lazy="form.status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach (\App\Enums\TaskStatus::cases() as $status)
                <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
            @error('form.status')
                <div class="text-red-600 bg-red-300 p-2 mt-2 rounded">{{$errors->first('form.status')}}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="date" id="deadline" wire:model.lazy="form.deadline"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('form.deadline')
                    <div class="text-red-600 bg-red-300 p-2 mt-2 rounded">{{$errors->first('form.deadline')}}</div>
                @enderror
        </div>
        <button type="submit" class="bg-green-600 py-2 px-4 rounded text-white">Save</button>
    </form>
</div>
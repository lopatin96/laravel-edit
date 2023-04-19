# Usage
```html
<x-laravel-edit::edit :route="url('tasks/' . $task->uuid)">
    <x-laravel-edit::edit-row>
        <x-laravel-edit::edit-row-key>{{ __('Title') }}</x-laravel-edit::edit-row-key>
        <x-laravel-edit::edit-row-value>
            <div class="flex items-center space-x-4">
                <input
                    type="text"
                    name="title"
                    maxlength="64"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="{{ __('Short task description (optional)') }}"
                    value="{{ $task->title }}"
                />
            </div>
        </x-laravel-edit::edit-row-value>
    </x-laravel-edit::edit-row>

    <div class="flex justify-end">
        <button
            type="submit"
            class="font-bold mt-6 text-green-700 bg-green-100 hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center select-none"
        >
            {{ __('Save') }}
        </button>
    </div>
</x-laravel-edit::edit>
```

### Views
```php
php artisan vendor:publish --tag="laravel-edit-views"
```
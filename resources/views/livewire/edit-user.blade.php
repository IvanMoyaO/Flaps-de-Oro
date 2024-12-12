<div class="max-w-4xl mx-auto mt-8">
    <div class="bg-white shadow-lg rounded-lg p-6">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700"> {{ __('edit.name') }}</label>
                <input type="text" id="name" value="{{ $user->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:ring-opacity-50" wire:model="name" />
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>


            <div>
                <label for="email" class="block text-sm font-medium text-gray-700"> {{ __('edit.email') }}</label>
                <input type="email" id="email" value="{{ $user->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:ring-opacity-50" wire:model="email" />
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>


            <div>
                <label for="role" class="block text-sm font-medium text-gray-700"> {{ __('edit.role') }}</label>
                <select id="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:ring-opacity-50" wire:model="role">
                   @foreach($roles as $role)
                        <option value="{{ $role->id }}" @if ($role->id == $user->roles->first()->id) active @endif>{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex space-x-4 mt-4">

            <x-button wire:click="save" class="bg-blue-500 hover:bg-blue-700 text-white">
                {{ __('edit.save') }}
            </x-button>


            <x-danger-button wire:click="delete" class="bg-red-500 hover:bg-red-700 text-white">
                {{ __('edit.yeet') }}
            </x-danger-button>
        </div>
    </div>
</div>

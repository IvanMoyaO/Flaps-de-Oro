<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="overflow-x-auto">

            <form wire:submit="search">
                <input type="text" placeholder="{{__('users.search')}}" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:ring-opacity-50" wire:model="query" />
                <x-button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white">
                    {{ __('users.search') }}
                </x-button>
            </form>

            <table class="min-w-full table-auto">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">{{ __('users.name') }}</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">{{ __('users.email') }}</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">{{ __('users.role') }}</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">{{ __('users.actions') }}</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($users as $user)
                    <tr class="border-t">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $user->id }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $user->name }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $user->email }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">@foreach($user->roles as $role)  {{ $role->name }} @endforeach</td>
                        <td class="px-4 py-2 text-sm text-blue-600">
                            <a href="{{ @route('users.edit', ['id' => $user->id ]) }}" class="hover:text-blue-800">{{ __('users.actions.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
</div>


<x-action-section>
    <x-slot name="title">
        Borrar Cuenta
    </x-slot>

    <x-slot name="description">

    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Se borrará la cuenta y <b>toda la información asociada.</b> Ten en cuenta que <b><i>no hay vuelta atrás</i></b>.
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                Borrar Cuenta
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                Borrar Cuenta
            </x-slot>

            <x-slot name="content">
                ¿Seguro que quieres borrar la cuenta? Se borrará la cuenta y <b>toda la información asociada.</b> Ten en cuenta que <b><i>no hay vuelta atrás</i></b>.
                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                  Cancelar
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    Borrar cuenta
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>

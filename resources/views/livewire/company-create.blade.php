<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva empresa</h3>
      </x-slot>
      <x-slot name="content">
        <form>
        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Nombre empresa" class="font-bold"/>
            <x-input type="text" wire:model.defer="company.Nombre" class="w-full"/>
            <x-input-error for="company.Nombre"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Slug del empresa" class="font-bold"/>
            <x-input type="text" wire:model.defer="company.Direccion" class="w-full"/>
            <x-input-error for="company.Direccion"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Slug del empresa" class="font-bold"/>
              <x-input type="text" wire:model.defer="company.Sector" class="w-full"/>
              <x-input-error for="company.Sector"/>
            </div>
          </div>
        </form>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
      </x-slot>
    </x-dialog-modal>
</div>

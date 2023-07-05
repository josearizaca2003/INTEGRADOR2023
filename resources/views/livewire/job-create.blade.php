<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva Trabajo</h3>
      </x-slot>
      <x-slot name="content">
        <form>
        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Titulo del trabajo" class="font-bold"/>
            <x-input type="text" wire:model.defer="job.Titulo" class="w-full"/>
            <x-input-error for="job.Titulo"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Descripcion" class="font-bold"/>
            <x-input type="text" wire:model.defer="job.Descripcion" class="w-full"/>
            <x-input-error for="job.Descripcion"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Empresa" class="font-bold"/>
              <x-input type="text" wire:model.defer="job.company_id" class="w-full"/>
              <x-input-error for="job.company_id"/>
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

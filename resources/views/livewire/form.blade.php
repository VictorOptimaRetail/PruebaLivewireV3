<div>
    <h1>FORM OBJECT</h1>
    <form wire:submit="save">
        <label for="title">Titulo</label>
        <input name="title" type="text" wire:model="form.title" wire:dirty.class="border-yellow">
        <div wire:dirty wire:target='"title'>Unsaved...</div>
        <div>
            @error('form.title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label for="content">Contenido</label>
        <input name="content" type="text" wire:model="form.content">
        <div>
            @error('form.content') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">
            Save
            <div wire:loading>Guardando...</div>
        </button>
    </form>
</div>

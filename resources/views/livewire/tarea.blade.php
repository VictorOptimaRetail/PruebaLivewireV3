<div>
    <li>{{ $tarea->descripcion }}</li>
    <button type="button" wire:click="$parent.borrarTarea({{ $tarea->id }})">Borrar tarea</button>
</div>

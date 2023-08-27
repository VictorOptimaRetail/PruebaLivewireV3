<div>
    <h1>NESTING COMPONENTS</h1>
    <h3>Lo que escribes en este input, se actualiza de forma reactiva en el componente hijo. Además, los botones usan eventos para borrar el texto del input.</h3>
    <input type="text" wire:model.live="texto">
    <livewire:componente-hijo :key="'componente-hijo'" :$texto />
    <button type="button" wire:click="pedirPermisoBorrar('azul')" style="color: blue">Intenta borrar!</button>
    <button type="button" wire:click="pedirPermisoBorrar('rojo')" style="color: red">Intenta borrar!</button>
    <button type="button" wire:click="$dispatch('pedir-permiso-borrar', { color: 'rojo' })" style="color: red">Borrar con evento directo desde el cliente, ahorrando una petición al servidor</button>

    <h3>El wire:model que se ha puesto en este componente está conectado con el wire:model de dentro del mismo. Cuando se borrar el atributo del padre asociado al wire:model, se borra también en el hijo (en el input)</h3>
    <livewire:componente-hijo-model :key="'componente-hijo-model'" wire:model="textoModel" />
    <button wire:click="borrar">Borrar</button>

    <h3>Puedes añadir tareas usando este pequeño form. Los botones para eliminar las tareas están en el componente hijo y utilizan el método del padre directamente.</h3>
    <form wire:submit="anadirTarea">
        <label for="textoTarea">Descripción: </label>
        <input name="textoTarea" type="text" wire:model='descripcionTarea'>
        <button type="submit">Añadir</button>
    </form>

    <ul>
        @forelse ($listaTareas as $tarea)
            <livewire:tarea :$tarea :key="$tarea->id" />            
        @empty
            No hay tareas pendientes! :D
        @endforelse
    </ul>
</div>

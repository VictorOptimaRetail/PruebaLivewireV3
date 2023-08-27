<div>
    <h1>USANDO ALPINE</h1>
    <h2>{{ $hola }}</h2>
    <button wire:click="$set('hola', '')"">reset</button>
    <div wire:custom-event="decirHola">
        <h4>Boton que emite evento que livewire captura para ejecutar método</h4>
        <button x-on:click="$dispatch('custom-event')">Decir Hola!</button>
        <h4>Boton que utiliza directamente el método de livewire</h4>
        <button x-on:click="$wire.decirHola()">Decir Hola directo!</button>
        <h4>Boton que ejecuta directamente un método que escribe por consola, sin renderizar la vista</h4>
        <button x-on:click="$wire.decirHolaEnConsola()">Decir Hola en consola!</button>
    </div>
</div>

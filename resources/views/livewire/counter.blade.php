<div>
    {{-- Contador --}}
    <h1>EJEMPLO CONTADOR</h1>
    <h2>Valor del contador: {{ $count }}</h2>

    <p>Ahora 'wire:model' es como el 'wire:model.defer' de antes, no renderiza el componente por cada cambio, para eso se debe usar wire:model.live</p>
    <input type="number" min="0" wire:model='count'>

    <div>
        <h2>Server Side Buttons</h2>
        <p>Se envia una request por cada click y se actualiza tanto el input como el valor renderizado</p>
        <button wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
    </div>

    <div>
        <h2>Client Side Buttons</h2>
        <p>No se envia ninguna request y se actualiza el input, pero no el valor de la vista blade, porque no se renderiza la página. Aun así, el valor se guarda bien, y en el siguiente render ya se muestra en la página.</p>
        <button wire:click="incrementJS">+</button>
        <button wire:click="decrementJS">-</button>
    </div>
</div>

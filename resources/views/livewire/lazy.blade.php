<div>
    <h1>LAZY LOADING</h1>
    <h3>Este es un componente lazy:</h3>
    <livewire:lazy-component lazy :$emoji />

    <h3>Este tiene desactivado el lazy, por eso ha tardado en cargar la página:</h3>
    <livewire:lazy-component :$emoji />

    <h3>Haz scroll hacia abajo!</h3>
    @for ($i = 0; $i < 50; $i++)
        <br>
    @endfor
    <h3>Aquí hay otro componente lazy, que solo empieza a cargar al entrar en el viewport. También hay uno que ya está presente (si no has bajado rápido), porque está configurado para empezar a cargar cuando la página haya cargado!</h3>
    <livewire:lazy-component lazy :$emoji />
    <livewire:lazy-component lazy="on-load" :$emoji />
</div>

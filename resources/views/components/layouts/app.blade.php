<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        Los enlaces que tienen 'wire:navigate' NO recargan la página!
        Y por cierto, el layout se carga de forma automatica a todos los componentes Livewire ;)
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a wire:navigate href="{{ url('/counter') }}" style="color: green; margin-left: 10px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Counter</a>
            <a wire:navigate href="{{ url('/alpine') }}" style="color: green; margin-left: 10px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Alpine</a>
            <a wire:navigate href="{{ url('/form') }}" style="color: green; margin-left: 10px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Form</a>
            <a wire:navigate href="{{ url('/lazy') }}" style="color: green; margin-left: 10px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Lazy</a>
            <a wire:navigate href="{{ url('/nesting') }}" style="color: green; margin-left: 10px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nesting</a>
        </div>
        {{ $slot }}
    </body>
</html>

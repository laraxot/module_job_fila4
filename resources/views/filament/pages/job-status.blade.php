<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
<x-filament::page>
    <x-filament::section>
        <pre>
        {!! $out !!}
        </pre>
    </x-filament::section>
    <x-filament::section>
        <x-slot name="heading">

        </x-slot>
        @foreach ($acts as $act)
            <x-filament::button wire:click="artisan('{{ $act->name }}')" tooltip="{{ $act->label }}">
                {{ Str::after($act->name, ':') }}
                <x-slot name="badge">
                    {{ Str::before($act->name, ':') }}
                </x-slot>
            </x-filament::button>
            &nbsp;
        @endforeach
    </x-filament::section>
    <x-filament::button wire:click="zibibbo()">
        zibibbo
    </x-filament::button>
</x-filament::page>

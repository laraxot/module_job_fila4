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
<div>
    <x-filament::section></x-filament::section>
    <x-filament::section>
        <x-slot name="title">Schedule Status</x-slot>
        <x-slot name="txt">
            <pre>{!! $out !!}</pre>
        </x-slot>
        <x-slot name="footer">
            @foreach ($acts as $act)
                <button class="btn btn-primary" wire:click="artisan('{{ $act->name }}')">{{ $act->name }}
                </button>
            @endforeach
        </x-slot>
    </x-filament::section>

</div>

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
@php
    $actions = $getActions();
@endphp
<div class="grid grid-cols-2 gap-1" style="width: max-content;">
    @foreach ($actions as $action)
        @if (!$action->isHidden())
            {{ $action }}
        @endif
    @endforeach
</div>

<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> e1b0bf9 (.)
<div>

    <ul>
    @foreach ($getState() as $key=>$value)
        @include('job::filament.tables.columns.array.item',['key'=>$key,'value'=>$value])
    @endforeach
    </ul>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> e1b0bf9 (.)

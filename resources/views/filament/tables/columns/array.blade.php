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
<div>

    @php
    /*
    dd([
        'getstate'=>$getState(),
        '$getRecord()'=>$getRecord(),
        'get_defined_vars()'=>get_defined_vars(),
    ]);
    */
    @endphp
    <ul>
    @foreach ($getState() as $key=>$value)
        @include('job::filament.tables.columns.array.item',['key'=>$key,'value'=>$value])
    @endforeach
    </ul>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> e1b0bf9 (.)
=======
</div>
>>>>>>> 7d4742a (.)

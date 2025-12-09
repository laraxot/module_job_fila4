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
    /*
    try{
        $val=@unserialize($value);
    }catch(\TypeError $e){
        $val=$value;
    }
    $value=$val;
    */
@endphp

<li><b>{{ $key }}</b>:
    @if (is_iterable($value))
        <ul>
            @foreach ($value as $k=>$v)
                @include('job::filament.tables.columns.array.item',['key'=>$k,'value'=>$v])
            @endforeach
        </ul>
    @else
        {{ $value }}
    @endif
<<<<<<< HEAD
<<<<<<< HEAD
</li>
=======
</li>
>>>>>>> e1b0bf9 (.)
=======
</li>
>>>>>>> 7d4742a (.)

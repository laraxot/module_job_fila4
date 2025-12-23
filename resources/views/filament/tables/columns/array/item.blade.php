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
</li>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</li>
=======
</li>
>>>>>>> a12f125f4a (.)
=======
</li>
>>>>>>> b93ef594b4 (.)
=======
</li>
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)

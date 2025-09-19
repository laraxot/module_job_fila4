<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Fields;

use Filament\Forms\Components\Repeater as ComponentsRepeater;
use Webmozart\Assert\Assert;

class Repeater extends ComponentsRepeater
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
    public function getItemLabel(string $uuid): null|string
    {
        $container = $this->getChildSchema($uuid);
        if ($container === null) {
            return null;
        }


        $res = $this->evaluate($this->itemLabel, [
            'state' => $container->getRawState(),
<<<<<<< HEAD
=======
    public function getItemLabel(string $uuid): ?string
    {
        $res = $this->evaluate($this->itemLabel, [
            'state' => $this->getChildComponentContainer($uuid)->getRawState(),
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
            'uuid' => $uuid,
        ]);
        Assert::nullOrString($res);

        return $res;
    }
}

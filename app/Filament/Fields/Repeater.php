<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Fields;

use Filament\Forms\Components\Repeater as ComponentsRepeater;
use Webmozart\Assert\Assert;

class Repeater extends ComponentsRepeater
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
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
=======
    public function getItemLabel(string $uuid): ?string
=======
    public function getItemLabel(string $uuid): null|string
>>>>>>> b93ef594b4 (.)
    {
        $container = $this->getChildSchema($uuid);
        if ($container === null) {
            return null;
        }


        $res = $this->evaluate($this->itemLabel, [
<<<<<<< HEAD
            'state' => $this->getChildComponentContainer($uuid)->getRawState(),
>>>>>>> a12f125f4a (.)
=======
            'state' => $container->getRawState(),
>>>>>>> b93ef594b4 (.)
=======
    public function getItemLabel(string $uuid): ?string
    {
        $res = $this->evaluate($this->itemLabel, [
            'state' => $this->getChildComponentContainer($uuid)->getRawState(),
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            'uuid' => $uuid,
        ]);
        Assert::nullOrString($res);

        return $res;
    }
}

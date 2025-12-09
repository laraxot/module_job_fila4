<?php

declare(strict_types=1);

namespace Modules\Job\Models;

/**
 * Base MorphPivot for Job module.
 *
 * Extends XotBaseMorphPivot which provides all standard properties and casts.
 *
 * @see \Modules\Xot\Models\XotBaseMorphPivot
 */
abstract class BaseMorphPivot extends \Modules\Xot\Models\XotBaseMorphPivot
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'job';
}

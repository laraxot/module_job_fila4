<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Traits;

trait FormatSeconds
{
    public function formatSeconds(int $seconds): string
    {
        $days = floor($seconds / (60 * 60 * 24));
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $seconds -= $days * 60 * 60 * 24;

        $hours = floor($seconds / (60 * 60));
        $seconds -= $hours * 60 * 60;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $seconds -= $days * (60 * 60 * 24);

        $hours = floor($seconds / (60 * 60));
        $seconds -= $hours * (60 * 60);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $seconds -= $days * 60 * 60 * 24;

        $hours = floor($seconds / (60 * 60));
        $seconds -= $hours * 60 * 60;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop

        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;

        $formattedSeconds = '';

        if ($days > 0) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
            $formattedSeconds .= "{$days} d ";
        }

        if ($hours > 0 || $days > 0) {
            $formattedSeconds .= "{$hours} h ";
        }

        if ($minutes > 0 || $hours > 0 || $days > 0) {
            $formattedSeconds .= "{$minutes} m ";
        }

        if ($days < 1 && ($seconds > 0 || $minutes > 0 || $hours > 0)) {
            $formattedSeconds .= "{$seconds} s";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            $formattedSeconds .= "$days d ";
=======
            $formattedSeconds .= "{$days} d ";
>>>>>>> b93ef594b4 (.)
        }

        if ($hours > 0 || $days > 0) {
            $formattedSeconds .= "{$hours} h ";
        }

        if ($minutes > 0 || $hours > 0 || $days > 0) {
            $formattedSeconds .= "{$minutes} m ";
        }

        if ($days < 1 && ($seconds > 0 || $minutes > 0 || $hours > 0)) {
<<<<<<< HEAD
            $formattedSeconds .= "$seconds s";
>>>>>>> a12f125f4a (.)
=======
            $formattedSeconds .= "{$seconds} s";
>>>>>>> b93ef594b4 (.)
=======
            $formattedSeconds .= "$days d ";
        }

        if ($hours > 0 || $days > 0) {
            $formattedSeconds .= "$hours h ";
        }

        if ($minutes > 0 || $hours > 0 || $days > 0) {
            $formattedSeconds .= "$minutes m ";
        }

        if ($days < 1 && ($seconds > 0 || $minutes > 0 || $hours > 0)) {
            $formattedSeconds .= "$seconds s";
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        }

        return $formattedSeconds;
    }
}

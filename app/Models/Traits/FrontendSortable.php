<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FrontendSortable
{
    /**
     * @param  array<string, string>  $defaultSort
     * @param  array<string>  $sortableColumns
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
    public function scopeSortableBy(
        Builder $query,
        array $sortableColumns,
        array $defaultSort = ['name' => 'asc'],
    ): Builder {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function scopeSortableBy(Builder $query, array $sortableColumns, array $defaultSort = ['name' => 'asc']): Builder
    {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function scopeSortableBy(Builder $query, array $sortableColumns, array $defaultSort = ['name' => 'asc']): Builder
    {
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        $request = request();
        $sorted = $request->has('sort_by') && in_array($request->input('sort_by'), $sortableColumns, false);

        /**
         * @var string $sortByRequest
         */
        $sortByRequest = $request->input('sort_by');
        /**
         * @var string $sortDirectionRequest
         */
        $sortDirectionRequest = $request->input('sort_direction', 'asc');

        return $query->when(
            $sorted,
            static function (Builder $query) use ($sortByRequest, $sortDirectionRequest): void {
<<<<<<< HEAD
                $query->orderBy((string) $sortByRequest, ((string) $sortDirectionRequest) === 'desc' ? 'desc' : 'asc');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $query->orderBy((string) $sortByRequest, ((string) $sortDirectionRequest) === 'desc' ? 'desc' : 'asc');
=======
=======
>>>>>>> origin/develop
                $query->orderBy(
                    (string) $sortByRequest,
                    (string) $sortDirectionRequest === 'desc' ? 'desc' : 'asc'
                );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                $query->orderBy((string) $sortByRequest, ((string) $sortDirectionRequest) === 'desc' ? 'desc' : 'asc');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
            },
            static function (Builder $query) use ($defaultSort): void {
                foreach ($defaultSort as $key => $direction) {
                    $query->orderBy($key, $direction);
                }
<<<<<<< HEAD
            },
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            },
=======
            }
>>>>>>> a12f125f4a (.)
=======
            },
>>>>>>> b93ef594b4 (.)
=======
            }
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
        );
    }
}

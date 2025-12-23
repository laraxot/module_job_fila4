<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> a12f125f4a (.)
=======
return new class extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();
            $table->string('job_id')->index();
            $table->string('name')->nullable();
            $table->string('queue')->nullable();
            $table->timestamp('started_at')->nullable()->index();
            $table->timestamp('finished_at')->nullable();
            $table->boolean('failed')->default(false)->index();
            $table->integer('attempt')->default(0);
            $table->integer('progress')->nullable();
            $table->text('exception_message')->nullable();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
        // -- UPDATE --
        $this->tableUpdate(static function (Blueprint $_table): void {
            // if (! $this->hasColumn('uuid')) {
            //    $table->string('uuid')->nullable();
            // }
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->string('job_id')->index();
                $table->string('name')->nullable();
                $table->string('queue')->nullable();
                $table->timestamp('started_at')->nullable()->index();
                $table->timestamp('finished_at')->nullable();
                $table->boolean('failed')->default(false)->index();
                $table->integer('attempt')->default(0);
                $table->integer('progress')->nullable();
                $table->text('exception_message')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            static function (Blueprint $table): void {
                // if (! $this->hasColumn('uuid')) {
                //    $table->string('uuid')->nullable();
                // }
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        // -- UPDATE --
        $this->tableUpdate(static function (Blueprint $_table): void {
            // if (! $this->hasColumn('uuid')) {
            //    $table->string('uuid')->nullable();
            // }
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }
};

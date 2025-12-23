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
            $table->string('command');
            $table->string('command_custom')->nullable()->default(null);
            $table->text('params')->nullable();
            $table->string('expression');
            $table->string('environments')->nullable();
            $table->text('options')->nullable();
            $table->text('options_with_value')->nullable();
            $table->string('log_filename')->nullable();
            $table->boolean('even_in_maintenance_mode')->default(false);
            $table->boolean('without_overlapping')->default(false);
            $table->boolean('on_one_server')->default(false);
            $table->string('webhook_before')->nullable();
            $table->string('webhook_after')->nullable();
            $table->string('email_output')->nullable();
            $table->boolean('sendmail_error')->default(false);
            $table->boolean('log_success')->default(true);
            $table->boolean('log_error')->default(true);
            $table->boolean('status')->default(true);
            $table->boolean('run_in_background')->default(false);
            $table->boolean('sendmail_success')->default(false);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop

            $table->softDeletes();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
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
                $table->string('command');
                $table->string('command_custom')->nullable()->default(null);
                $table->text('params')->nullable();
                $table->string('expression');
                $table->string('environments')->nullable();
                $table->text('options')->nullable();
                $table->text('options_with_value')->nullable();
                $table->string('log_filename')->nullable();
                $table->boolean('even_in_maintenance_mode')->default(false);
                $table->boolean('without_overlapping')->default(false);
                $table->boolean('on_one_server')->default(false);
                $table->string('webhook_before')->nullable();
                $table->string('webhook_after')->nullable();
                $table->string('email_output')->nullable();
                $table->boolean('sendmail_error')->default(false);
                $table->boolean('log_success')->default(true);
                $table->boolean('log_error')->default(true);
                $table->boolean('status')->default(true);
                $table->boolean('run_in_background')->default(false);
                $table->boolean('sendmail_success')->default(false);
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

            $table->softDeletes();
        });
        // -- UPDATE --
<<<<<<< HEAD
=======

                $table->softDeletes();
            }
        );
        // -- UPDATE --
>>>>>>> origin/develop
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 548bbd3 (.)
>>>>>>> laraxot/develop
    }
};

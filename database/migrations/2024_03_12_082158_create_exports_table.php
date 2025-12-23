<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> e1b0bf9 (.)
=======
return new class extends XotBaseMigration {
>>>>>>> 7d4742a (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d4742a (.)
        $this->tableCreate(static function (Blueprint $table): void {
            $table->id();
            $table->timestamp('completed_at')->nullable();
            $table->string('file_disk');
            $table->string('file_name')->nullable();
            $table->string('exporter');
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('total_rows');
            $table->unsignedInteger('successful_rows')->default(0);
            $table->nullableUuidMorphs('user');
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('user_type')) {
                $table->string('user_type', 36)->nullable()->index();
            }
            $this->updateTimestamps($table, true);
        });
<<<<<<< HEAD
=======
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->timestamp('completed_at')->nullable();
                $table->string('file_disk');
                $table->string('file_name')->nullable();
                $table->string('exporter');
                $table->unsignedInteger('processed_rows')->default(0);
                $table->unsignedInteger('total_rows');
                $table->unsignedInteger('successful_rows')->default(0);
                $table->nullableUuidMorphs('user');
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('user_type')) {
                    $table->string('user_type', 36)->nullable()->index();
                }
                $this->updateTimestamps($table, true);
            }
        );
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
    }
};

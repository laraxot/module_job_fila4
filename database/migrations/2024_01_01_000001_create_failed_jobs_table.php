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
            // $table->uuid('id')->primary();
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('uuid')) {
                $table->string('uuid')->nullable();
            }
        });
<<<<<<< HEAD
=======
        $this->tableCreate(
            static function (Blueprint $table): void {
                // $table->uuid('id')->primary();
                $table->id();
                $table->string('uuid')->unique();
                $table->text('connection');
                $table->text('queue');
                $table->longText('payload');
                $table->longText('exception');
                $table->timestamp('failed_at')->useCurrent();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('uuid')) {
                    $table->string('uuid')->nullable();
                }
            }
        );
>>>>>>> e1b0bf9 (.)
=======
>>>>>>> 7d4742a (.)
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('judul_dokumen')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('nomor_peraturan')->nullable();
            $table->unsignedBigInteger('document_type_id');
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->string('tempat_penetapan')->nullable();
            $table->datetime('tanggal_penetapan')->nullable();
            $table->dateTime('tanggal_pengundangan')->nullable();
            $table->unsignedBigInteger('source_id');
            $table->foreign('source_id')->references('id')->on('sources');
            $table->string('urusan_pemerintah')->nullable();
            $table->string('bidang_hukum')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('pemrakarsa')->nullable();
            $table->string('penandatangan')->nullable();
            $table->string('hasil_uji_mk')->nullable();
            $table->string('pengarang')->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->string('file_url')->nullable();
            $table->bigInteger('file_size');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}

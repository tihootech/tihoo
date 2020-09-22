<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title')->nullable();
            $table->text('banner_info')->nullable();
            $table->text('address')->nullable();
            $table->text('phones')->nullable();
            $table->timestamps();
        });

        \DB::table('websites')->insert([
            'banner_title' => 'با تیهوتک، بهتر و حرفه‌ای تر دیده شوید!',
            'banner_info' => 'توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات',
            'address' => 'آدرس آدرس آدرس آدس ...',
            'phones' => '09185567663,09387290336',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 会社名
            $table->text('company_id'); // 会社ID
            $table->string('top_photo')->nullable(); // TOP写真
            $table->string('phone_number')->nullable(); // 電話番号
            $table->string('address1')->nullable(); // 会社住所1
            $table->string('address2')->nullable(); // 会社住所2
            $table->string('postal_code')->nullable(); // 郵便番号
            $table->string('website_url')->nullable(); // ホームページURL
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
        Schema::dropIfExists('companies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyIdAndSubtitleToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable(); // 会社ID（外部キーとしても使う場合はunsignedBigIntegerが適切）
            $table->string('subtitle')->nullable(); // サブタイトル

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            //
            $table->dropColumn('company_id');
            $table->dropColumn('subtitle');
        });
    }
}

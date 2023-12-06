<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->id();
            $table->string('name'); // 名前は通常短いためstring型
            $table->string('company_name'); // 会社名も通常短いためstring型
            $table->string('photo0')->nullable(); // 写真のURLは通常短いためstring型
            $table->text('profile'); // プロフィールは長いテキストの可能性があるためtext型
            $table->text('question1'); // 質問は長くなる可能性があるためtext型
            $table->text('answer1'); // 回答も長くなる可能性があるためtext型
            $table->string('photo1')->nullable(); // 写真のURLは通常短いためstring型
            $table->text('question2');
            $table->text('answer2');
            $table->string('photo2')->nullable();
            $table->text('question3');
            $table->text('answer3');
            $table->text('message'); // 伝えたいことは長いテキストの可能性があるためtext型
            $table->string('photo3')->nullable();
            $table->string('sns_link1')->nullable(); // SNSリンクは短いためstring型
            $table->string('sns_link2')->nullable(); // SNSリンクは短いためstring型
            $table->string('sns_link3')->nullable(); // SNSリンクは短いためstring型

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
        Schema::dropIfExists('members');
    }
}

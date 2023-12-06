<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResetMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // まずカラムを削除
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn(['name', 'company_id', 'subtitle', 'profile', 'question1', 'question2', 'question3', 'answer1', 'answer2', 'answer3', 'photo0', 'photo1', 'photo2', 'photo3', 'sns_link1', 'sns_link2', 'sns_link3', 'message']);
        });

        // カラムを追加
        Schema::table('members', function (Blueprint $table) {
            $table->string('name'); // 名前
            $table->VARCHAR('company_id')->nullable(); // 会社ID
            $table->string('subtitle')->nullable(); // サブタイトル
            $table->text('profile'); // プロフィール
            $table->text('question1'); // 質問1
            $table->text('question2'); // 質問2
            $table->text('question3'); // 質問3
            $table->text('answer1'); // 回答1
            $table->text('answer2'); // 回答2
            $table->text('answer3'); // 回答3
            $table->string('photo0')->nullable(); // 写真0
            $table->string('photo1')->nullable(); // 写真1
            $table->string('photo2')->nullable(); // 写真2
            $table->string('photo3')->nullable(); // 写真3
            $table->string('sns_link1')->nullable(); // SNSリンク1
            $table->string('sns_link2')->nullable(); // SNSリンク2
            $table->string('sns_link3')->nullable(); // SNSリンク3
            $table->text('message'); // メッセージ
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
            $table->dropColumn(['name', 'company_id', 'subtitle', 'profile', 'question1', 'question2', 'question3', 'answer1', 'answer2', 'answer3', 'photo0', 'photo1', 'photo2', 'photo3', 'sns_link1', 'sns_link2', 'sns_link3', 'message']);
        });
    }
}

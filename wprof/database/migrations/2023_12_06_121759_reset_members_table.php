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
        Schema::table('members', function (Blueprint $table) {
            if (!Schema::hasColumn('members', 'name')) {
                $table->string('name'); // 名前
            }
            if (!Schema::hasColumn('members', 'company_id')) {
                $table->text('company_id')->nullable(); // 会社ID
            }
            if (!Schema::hasColumn('members', 'subtitle')) {
                $table->string('subtitle')->nullable(); // サブタイトル
            }
            if (!Schema::hasColumn('members', 'profile')) {
                $table->text('profile'); // プロフィール
            }
            if (!Schema::hasColumn('members', 'question1')) {
                $table->text('question1'); // 質問1
            }
            if (!Schema::hasColumn('members', 'question2')) {
                $table->text('question2'); // 質問2
            }
            if (!Schema::hasColumn('members', 'question3')) {
                $table->text('question3'); // 質問3
            }
            if (!Schema::hasColumn('members', 'answer1')) {
                $table->text('answer1'); // 回答1
            }
            if (!Schema::hasColumn('members', 'answer2')) {
                $table->text('answer2'); // 回答2
            }
            if (!Schema::hasColumn('members', 'answer3')) {
                $table->text('answer3'); // 回答3
            }
            if (!Schema::hasColumn('members', 'photo0')) {
                $table->string('photo0')->nullable(); // 写真0
            }
            if (!Schema::hasColumn('members', 'photo1')) {
                $table->string('photo1')->nullable(); // 写真1
            }
            if (!Schema::hasColumn('members', 'photo2')) {
                $table->string('photo2')->nullable(); // 写真2
            }
            if (!Schema::hasColumn('members', 'photo3')) {
                $table->string('photo3')->nullable(); // 写真3
            }
            if (!Schema::hasColumn('members', 'sns_link1')) {
                $table->string('sns_link1')->nullable(); // SNSリンク1
            }
            if (!Schema::hasColumn('members', 'sns_link2')) {
                $table->string('sns_link2')->nullable(); // SNSリンク2
            }
            if (!Schema::hasColumn('members', 'sns_link3')) {
                $table->string('sns_link3')->nullable(); // SNSリンク3
            }
            if (!Schema::hasColumn('members', 'message')) {
                $table->text('message'); // メッセージ
            }
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

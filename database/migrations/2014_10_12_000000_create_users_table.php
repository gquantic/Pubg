<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('admin')->nullable();
            $table->integer('balance')->default(0)->comment('Баланс пользователя');
            $table->integer('moderated')->default(0)->comment('Проверил ли модератор пользователя?');
            $table->integer('banned')->default(0)->comment('Пользователь забанен?');

            /**
             * @PS Роли:
             * player - обычный игрок.
             * manager - менеджер с доступом к просмотру деталей турнира и редактирования статусов и доп. сведений. Может организовывать турниры.
             * commentator - комментатор для боя, видит статистику и тд, но не видит самые важные детали. Без доступа к редактированию.
             * editor - редактор, может создавать, редактировать новости, добавлять турниры, контракты и промо-акции.
             * admin - только он может назначать все роли выше пользователям. Есть доступ ко всему. Выдаётся самым важным и ответственным.
             */
            $table->string('role')->default('player');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

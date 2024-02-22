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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name')->nullable();
            $table->string('unique_code')->unique()->nullable();
            $table->string('role')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('token')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('account_status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        // Hash the default password for existing users
        $defaultPassword = 'default_password'; // Change this to your desired default password
        $hashedPassword = Hash::make($defaultPassword);

        // Update the 'password' column in the 'users' table with the hashed password
        DB::table('users')->update(['password' => $hashedPassword]);
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

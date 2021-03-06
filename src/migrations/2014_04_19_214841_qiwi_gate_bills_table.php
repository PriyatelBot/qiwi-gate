<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QiwiGateBillsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('ff-qiwi-gate')->create('merchants_bills', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('merchant_id');
			$table->string('user');
			$table->decimal('amount', 15, 2);
			$table->string('ccy', 3);
			$table->string('comment', 255)->nullable();
			$table->string('lifetime')->nullable();
			$table->string('pay_source')->default('qw');
			$table->string('prv_name', 100)->nullable();
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
		Schema::connection('ff-qiwi-gate')->drop('merchants_bills');
	}

}

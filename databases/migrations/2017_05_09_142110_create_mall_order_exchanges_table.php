<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-05-09 14:21:10
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallOrderExchangesTable.
 */
class CreateMallOrderExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_order_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount')->default(0.00);
            $table->string('address_for_take');
            $table->string('address_for_exchange');
            $table->integer('express_id_for_receive');
            $table->integer('express_id_for_exchange');
            $table->integer('order_id');
            $table->json('reason');
            $table->string('remark')->nullable();
            $table->json('response');
            $table->integer('user_id');
            $table->integer('shop_id');
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
        $this->schema->drop('mall_order_exchanges');
    }
}

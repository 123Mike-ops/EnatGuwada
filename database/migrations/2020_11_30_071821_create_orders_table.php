


 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('foodid');
            $table->integer('restaurantid');
            $table->integer('stageid')->nullable();
            $table->integer('typeid');
            $table->integer('userId');
            $table->string('stageDesc');
            $table->boolean('orderStarted')->default(0);


            $table->string('description')->nullable();
          
            $table->string('ingrident')->nullable();

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
        Schema::dropIfExists('orders');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create vendor_account Table
        Schema::create('vendor_accounts', function(Blueprint $table)
        {
            $table->integer('id' , true);
            $table->integer('vendor_id');
            $table->string('beneficiary_name', 50);
            $table->string('account_number', 20);
            $table->string('beneficiary_address', 300);
            $table->string('beneficiary_bank', 20);
            $table->string('beneficiary_bank_address', 300);
            $table->string('ifsc_Code', 20);
            $table->string('bank_code', 10);
            $table->string('branch_code', 10);
            $table->enum('account_type', array('Invalid Account','Company Account','Alibaba Trade Assurance Account','Current Account','Saving Account'))->default('Invalid Account');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop  vendor_account Table
        Schema::drop('vendor_accounts');
    }
}

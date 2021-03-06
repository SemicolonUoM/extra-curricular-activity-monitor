<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewStaffTypeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('
          Create View `staff_details` as 
             Select
             staff.name,activity_type
             From
             (staff join staff_type on staff.id=staff_type.type_id) join activity_types on staff_type.type_id=activity_types.id 
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP view staff_details');
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'created_at' => '2019-06-04 14:21:47',
                'updated_at' => '2019-06-04 14:21:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
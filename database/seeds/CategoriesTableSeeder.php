<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Electrical Equipment',
                'slug' => 'electrical-equipment',
                'created_at' => '2020-04-24 10:02:50',
                'updated_at' => '2020-04-25 12:33:34',
            ),
            1 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 2,
                'name' => 'Industrial Controls',
                'slug' => 'industrial-controls',
                'created_at' => '2020-04-24 10:03:36',
                'updated_at' => '2020-04-24 10:03:36',
            ),
            2 => 
            array (
                'id' => 6,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Circuit Breakers',
                'slug' => 'circuit-breakers',
                'created_at' => '2020-04-24 10:04:46',
                'updated_at' => '2020-04-24 10:04:46',
            ),
            3 => 
            array (
                'id' => 7,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Contactors',
                'slug' => 'contactors',
                'created_at' => '2020-04-24 10:05:09',
                'updated_at' => '2020-04-24 10:05:09',
            ),
            4 => 
            array (
                'id' => 8,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Relays',
                'slug' => 'relays',
                'created_at' => '2020-04-24 10:05:59',
                'updated_at' => '2020-04-24 10:05:59',
            ),
            5 => 
            array (
                'id' => 9,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Timers',
                'slug' => 'timers',
                'created_at' => '2020-04-24 10:07:04',
                'updated_at' => '2020-04-24 10:07:31',
            ),
            6 => 
            array (
                'id' => 10,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Transformers',
                'slug' => 'transformers',
                'created_at' => '2020-04-24 10:07:58',
                'updated_at' => '2020-04-24 10:07:58',
            ),
            7 => 
            array (
                'id' => 11,
                'parent_id' => 5,
                'order' => 3,
                'name' => 'Programmable Logic Controllers',
                'slug' => 'programmable-logic-controllers',
                'created_at' => '2020-04-24 10:09:47',
                'updated_at' => '2020-04-24 10:09:47',
            ),
            8 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Mechanical Equipment',
                'slug' => 'mechanical-equipment',
                'created_at' => '2020-04-24 10:16:50',
                'updated_at' => '2020-04-25 12:33:58',
            ),
            9 => 
            array (
                'id' => 13,
                'parent_id' => 12,
                'order' => 2,
                'name' => 'Aircompressors',
                'slug' => 'aircompressors',
                'created_at' => '2020-04-24 10:18:08',
                'updated_at' => '2020-04-25 12:35:44',
            ),
            10 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Tools and Hardware',
                'slug' => 'tools-and-hardware',
                'created_at' => '2020-04-24 10:21:09',
                'updated_at' => '2020-04-25 12:34:21',
            ),
            11 => 
            array (
                'id' => 15,
                'parent_id' => 14,
                'order' => 2,
                'name' => 'Bearings',
                'slug' => 'bearings',
                'created_at' => '2020-04-24 10:22:26',
                'updated_at' => '2020-04-25 12:36:06',
            ),
            12 => 
            array (
                'id' => 16,
                'parent_id' => 15,
                'order' => 3,
                'name' => 'Bearing Balls',
                'slug' => 'bearing-balls',
                'created_at' => '2020-04-24 10:23:10',
                'updated_at' => '2020-04-24 10:23:10',
            ),
            13 => 
            array (
                'id' => 17,
                'parent_id' => 15,
                'order' => 3,
                'name' => 'Bushes',
                'slug' => 'bushes',
                'created_at' => '2020-04-24 10:23:35',
                'updated_at' => '2020-04-24 10:23:35',
            ),
            14 => 
            array (
                'id' => 18,
                'parent_id' => 15,
                'order' => 3,
                'name' => 'Bearing Housing',
                'slug' => 'bearing-housing',
                'created_at' => '2020-04-24 10:24:47',
                'updated_at' => '2020-04-24 10:24:47',
            ),
            15 => 
            array (
                'id' => 19,
                'parent_id' => 15,
                'order' => 3,
                'name' => 'Bearing Rollers',
                'slug' => 'bearing-rollers',
                'created_at' => '2020-04-24 10:25:21',
                'updated_at' => '2020-04-24 10:25:21',
            ),
        ));
        
        
    }
}
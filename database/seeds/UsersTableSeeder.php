<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 3,
                'name' => 'Nicholas Paul',
                'cname' => NULL,
                'email' => 'nicwek@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q6DaM3.M6eSyHxDAGyeXcOYhHi8LLIQ2E/JNY28VqrjUmbNr/xVYW',
                'isVerified' => 1,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-20 16:00:32',
                'updated_at' => '2020-05-06 08:58:01',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'cname' => NULL,
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.CYyAbpV2XikXLA19c2FnuShTju0qHGArxS.tSR7Q3pfroZbb7lmu',
                'isVerified' => 0,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-22 09:29:12',
                'updated_at' => '2020-05-06 08:57:19',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Mercy Baraka',
                'cname' => NULL,
                'email' => 'm@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e7.vScoiEEchcGoWCSdRi.HmnPaqUaqK7FeLr4j.Ddf7.NvAWEUxG',
                'isVerified' => 1,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-23 19:55:33',
                'updated_at' => '2020-04-23 20:01:57',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Jacqueline Nabibya',
                'cname' => NULL,
                'email' => 'j@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/x/iAwEDgXVRSe6QeT99Oe/hfGaJqUhPkbnr2fNNd89ZvTxkAMwDu',
                'isVerified' => 0,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-23 19:58:25',
                'updated_at' => '2020-04-23 19:59:30',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Precious Eileen',
                'cname' => NULL,
                'email' => 'p@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$txsBVR3SHa.ITJz2wuklLeQrjIlMjkFgQmbBccTQuJCt0hvYQeCw.',
                'isVerified' => 0,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-23 20:00:01',
                'updated_at' => '2020-04-23 20:01:22',
            ),
        ));
        
        
    }
}
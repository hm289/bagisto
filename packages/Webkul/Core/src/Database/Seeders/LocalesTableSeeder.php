<?php

namespace Webkul\Core\Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocalesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('channels')->delete();

        DB::table('locales')->delete();

        DB::table('locales')->insert([
            [
                'id'   => 1,
                'code' => 'en',
                'name' => 'English',
                'direction' => 'ltr',
            ], [
                'id'   => 2,
                'code' => 'fa',
                'name' => 'Persian',
                'direction' => 'rtl',
            ], [
                'id'   => 3,
                'code' => 'fr',
                'name' => 'French',
                'direction' => 'ltr',
            ], [
                'id'   => 4,
                'code' => 'nl',
                'name' => 'Dutch',
                'direction' => 'ltr',
            ], [
                'id'   => 5,
                'code' => 'tr',
                'name' => 'Türkçe',
                'direction' => 'ltr',
            ]]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\CountryCode;
use App\Models\Role;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'title' => 'عربي',
                'img' => 'images/ar.png',
                'slogan' => 'ar',
            ],
            [
                'title' => 'انجليزي',
                'img' => 'images/en.png',
                'slogan' => 'en',
            ],
        ];

        foreach ($data as $key => $item) {
            Language::updateOrCreate($item);
        }


    }
}

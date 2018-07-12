<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'menu1' => 'menu 1',
            'menu2' => 'menu 2',
            'menu3' => 'menu 3',
            'menu4' => 'menu 4',
            'menu5' => 'menu 5',
            'menu6' => 'menu 6',
            'menu7' => 'menu 7',
            'menu8' => 'menu 8',
            'menu9' => 'menu 9',
            'menu10' => 'menu 10',
            'menu11' => 'menu 11'
        ];

        Setting::create([
            'menu' => $array
        ]);
    }
}

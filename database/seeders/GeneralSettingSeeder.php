<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new GeneralSetting();

        $general->description = "İbrahim EFE";
        $general->keyword = "key1, key2";
        $general->auth = "ibo EFE";
        $general->favicon = "favicon.jpg";
        $general->logo = "logo.png";
        $general->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Meal;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('meals')->delete();
        $json = File::get("database/data/meals.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Meal::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'description' => $obj->description,
                'amount' => 1,
                'price' => $obj->price,
                'path_to_photo' => $obj->path_to_photo
            ));
        }
    }
}

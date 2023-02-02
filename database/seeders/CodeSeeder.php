<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CodeSeeder::truncate();
        $csvData = fopen(base_path('database/data/emojis.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                \App\Models\Codes::create([
                    'name' => $data['0'],
                    'category' => $data['1'],
                    'code' => $data['2']
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}


<?php

namespace Database\Seeders;

use App\Models\vinyl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vinylSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vinyls = config('vinyl-db.vinyls');
        foreach ($vinyls as $vinyl) {
            $vinile = new vinyl();
            $vinile->title = $vinyl['title'];
            $vinile->artist = $vinyl['artist'];
            $vinile->cover = $vinyl['cover'];
            $vinile->duration = $vinyl['duration'];
            $vinile->genre = $vinyl['genre'];
            $vinile->language = $vinyl['language'];
            $vinile->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Vinyl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VinylSeeder extends Seeder
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
            $vinile = new Vinyl();
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

<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = Album::all();
        $artists = Artist::all();

        foreach ($albums as $album) {
            if ($album->artists()->exists()) {
                continue;
            }

            $numberArtists = rand(1, 10); 
            $selectedArtists = $artists->random($numberArtists);

            foreach ($selectedArtists as $artist) {
                $album->artists()->attach($artist->id, [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::factory()->count(10)->create();
        Artist::factory()->count(10)->create();
        Track::factory()->count(10)->create();
        Genre::factory()->count(10)->create();

        $this->call(ArtistTrackSeeder::class);
        $this->call(TrackGenreSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Track;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrackGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        $tracks = Track::all();
        $genres = Genre::all();

        foreach($tracks as $track){
            if($track->genres()->exists()){
                continue;
            }
            
            $numberGenres = rand(1,3);
            $selectedGenres = $genres->random($numberGenres);

            foreach($selectedGenres as $genre){
                $track->genres()->attach($genre->id, [
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now()
                ]);
            }

        }
    }
};

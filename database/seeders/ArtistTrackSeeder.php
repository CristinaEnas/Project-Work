<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Track;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks = Track::all();
        $artists = Artist::all();

        foreach($tracks as $track){
            if($track->artists()->exists()){
                continue;
            }
            $numberArtists = rand(1, 5); 
            $selectedArtists = $artists->random($numberArtists);

            foreach($selectedArtists as $artist){
                $track->artists()->attach($artist->id, [
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now()
                ]);
            }
        }
    }
}

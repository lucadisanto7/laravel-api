<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tech = ['HTML', 'CSS', 'Javascript', 'Bootstrap', 'Vuejs', 'Jquery', 'PHP', 'Laravel', 'Symfony', 'Reactjs', 'Nodejs', 'MySQL', 'XML'];
        foreach ($techs as $tech) {
            $technology = new Technolgy();

            $technology->name = $tech;
            $technology->slug = Technology::generateSlug($tech);

            $technology->save();
        }
    }
}

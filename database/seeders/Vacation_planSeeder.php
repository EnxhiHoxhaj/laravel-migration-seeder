<?php

namespace Database\Seeders;

use App\Model\Vacation_plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class Vacation_planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $plan = new Vacation_plan();
        $plan->company = $faker->randomElement(['Trenitalia', 'Italo', 'Ferrovie dello Stato Italiane', 'Trenord', 'SNCF (Société Nationale des Chemins de fer Français)', 'Deutsche Bahn', 'Renfe (Red Nacional de los Ferrocarriles Españoles)', 'ÖBB (Österreichische Bundesbahnen)', 'SBB (Schweizerische Bundesbahnen)', 'Eurostar']);
        $plan->departure_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
        $plan->arrival_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
        $plan->departure_time = $faker->randomElement([]);
    }
    
}

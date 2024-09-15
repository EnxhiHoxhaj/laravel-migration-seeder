<?php

namespace Database\Seeders;

use App\Models\VacationPlans;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacationPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    { 

        for($i = 0; $i < 30; $i++){

            $plan = new VacationPlans();
            $plan->company = $faker->randomElement(['Trenitalia', 'Italo', 'Ferrovie dello Stato Italiane', 'Trenord', 'SNCF (Société Nationale des Chemins de fer Français)', 'Deutsche Bahn', 'Renfe (Red Nacional de los Ferrocarriles Españoles)', 'ÖBB (Österreichische Bundesbahnen)', 'SBB (Schweizerische Bundesbahnen)', 'Eurostar']);
            $plan->departure_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
            $plan->arrival_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
            $plan->price = $faker->randomElement([15.23, 19.56, 22.47, 28.99, 30.12, 35.76, 38.45, 42.11, 45.67, 49.99, 55.01, 60.88, 63.32, 75.44, 80.55, 85.90, 90.13, 99.99, 105.22, 110.58, 115.75, 125.10, 130.87, 135.44, 140.23, 142.00, 145.67, 148.99, 149.40, 150.00]);
            $plan->save();
        }

    }
}

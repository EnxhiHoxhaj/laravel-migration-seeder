<?php

namespace Database\Seeders;

use App\Model\Vacation_plans;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class Vacation_planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $plan = new Vacation_plans();
        $plan->company = $faker->randomElement(['Trenitalia', 'Italo', 'Ferrovie dello Stato Italiane', 'Trenord', 'SNCF (Société Nationale des Chemins de fer Français)', 'Deutsche Bahn', 'Renfe (Red Nacional de los Ferrocarriles Españoles)', 'ÖBB (Österreichische Bundesbahnen)', 'SBB (Schweizerische Bundesbahnen)', 'Eurostar']);
        $plan->departure_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
        $plan->arrival_station = $faker->randomElement(['Roma Termini', 'Milano Centrale', 'Firenze Santa Maria Novella', 'Napoli Centrale', 'Torino Porta Nuova', 'Bologna Centrale', 'Venezia Santa Lucia', 'Genova Piazza Principe', 'Londra King’s Cross', 'Parigi Gare de Lyon', 'Francoforte Centrale', 'Berlino Hauptbahnhof', 'Madrid Atocha', 'Amsterdam Centraal', 'Bruxelles-Midi', 'Vienna Hauptbahnhof', 'Zurigo Hauptbahnhof', 'Copenaghen H', 'Stoccolma T-Centralen', 'Lisbon Oriente']);
        $plan->departure_time = $faker->randomElement(['06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30']);
        $plan->train_code = $faker->randomElement(['123456', '654321', '234567', '765432', '345678', '876543', '456789', '987654', '567890', '098765', '135790', '246802', '357913', '468024', '579135', '680246', '791357', '802468', '913579', '024680', '135864', '246975', '357086', '468197', '579208', '680319', '791420', '802531', '913642', '024753', '135864']);
        $plan->number_of_carriages = $faker->numberBetween([5, 15]);
        $plan->number_of_changes = $faker->numberBetween([0, 5]);
        $plan->price = $faker->randomElement([15.23, 19.56, 22.47, 28.99, 30.12, 35.76, 38.45, 42.11, 45.67, 49.99, 55.01, 60.88, 63.32, 75.44, 80.55, 85.90, 90.13, 99.99, 105.22, 110.58, 115.75, 125.10, 130.87, 135.44, 140.23, 142.00, 145.67, 148.99, 149.40, 150.00]);

        $plan->save();
    }
    
}

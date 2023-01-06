<?php

namespace Database\Seeders;

use Faker;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2 résa avec des données statique
        // non Foo
        // prénom Foo
        // jour 06/01/2023
        // heure 12:00
        // tel 0612345678
        // email foo.foo@example.com

        // non Bar
        // prénom Bar
        // jour 13/01/2023
        // heure 12:00
        // tel 0634567812
        // email bar.bar@example.com

        // 48 résa avec des données aléatoire 
        $faker = Faker\Factory::create('fr_FR');
        // nom 
        $faker->lastName();

        // prénom
        $faker->firstName();

        // jour 
        $faker->date('Y-m-d');

        // heure 
        $faker->time('H:i');

        // le nombre de personnes
        // tel
        $faker->phoneNumber();

        // email
        $faker->safeEmail();


        $reservationDatas=[
            [
                'nom' => 'Foo',
                'prenom' => 'Foo',
                'nombre_personnes' => 10,
                'jour' => '2023-01-06',
                'heure' => '12:00',
                'tel' => '0612345678',
                'email' => 'foo.foo@example.com',
            ],
            [
                'nom' => 'bar',
                'prenom' => 'bar',
                'nombre_personnes' => 8,
                'jour' => '2023-01-13',
                'heure' => '12:00',
                'tel' => '0634567812',
                'email' => 'bar.bar@example.com',
            ]
            
        ];

        foreach ($reservationDatas as $reservationData) {
            $reservation = new Reservation();
            $reservation ->nom = $reservationData['nom'] ;
            $reservation ->prenom = $reservationData['prenom'] ;
            $reservation ->nombre_personnes = $reservationData['nombre_personnes'];
            $reservation ->jour = $reservationData['jour'] ;
            $reservation ->heure = $reservationData['heure'] ;
            $reservation ->tel = $reservationData['tel'] ;
            $reservation ->email = $reservationData['email'] ;
            $reservation->save();
        }
        
        for ($i = 0; $i < 48; $i++)  {  
        $reservation = new Reservation();
        //nom
        $reservation->nom = $faker->lastName();
        //prénom
        $reservation->prenom = $faker->firstName();
        //jour
        $reservation->jour = $faker->date('Y-m-d');
        //heure
        $reservation->heure = $faker->time('H:i');
        //le nombre de personne 
        $reservation->nombre_personnes = random_int(1,7);
        //le tel
        $reservation->tel = $faker->phoneNumber();
        //email
        $reservation->email = $faker->safeEmail();
        // enregistrement dans la BDD
        $reservation->save();
        }

    }
}

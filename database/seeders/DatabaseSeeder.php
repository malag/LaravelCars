<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Car::create([
            'Title' => 'Avengers',
            'Year' => 2012,
            'Description' => 'Marvel The Avengers4​ (titulada The Avengers: Los Vengadores en Hispanoamérica y Los Vengadores en España), o simplemente The Avengers, es una película de superhéroes estadounidense de 2012 basada en el equipo de superhéroes homónimo de Marvel Comics, producida por Marvel Studios y distribuida por Walt Disney Studios Motion Pictures, en colaboración con Paramount Pictures.N 1​ Es la sexta película del Universo cinematográfico de Marvel (UCM). La película fue escrita y dirigida por Joss Whedon, y cuenta con un reparto coral que incluye a Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson y Jeremy Renner como el equipo titular, junto a Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård y Samuel L. Jackson. En The Avengers, Nick Fury, director de la agencia de espionaje S.H.I.E.L.D., recluta a Tony Stark, Steve Rogers, Bruce Banner, Thor, Natasha Romanoff y Clint Barton para formar un equipo que debe evitar que Loki, hermano de Thor, se apodere de la Tierra.',
            'Genre' => 'Action',
            'Director' => 'Joss Whedon                ',
            'Producer' => 'Kevin Feige',
            'Actors' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth'
        ]);  

        Car::create([
            'Title' => 'Avengers',
            'Year' => 2012,
            'Description' => 'Marvel The Avengers4​ (titulada The Avengers: Los Vengadores en Hispanoamérica y Los Vengadores en España), o simplemente The Avengers, es una película de superhéroes estadounidense de 2012 basada en el equipo de superhéroes homónimo de Marvel Comics, producida por Marvel Studios y distribuida por Walt Disney Studios Motion Pictures, en colaboración con Paramount Pictures.N 1​ Es la sexta película del Universo cinematográfico de Marvel (UCM). La película fue escrita y dirigida por Joss Whedon, y cuenta con un reparto coral que incluye a Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson y Jeremy Renner como el equipo titular, junto a Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård y Samuel L. Jackson. En The Avengers, Nick Fury, director de la agencia de espionaje S.H.I.E.L.D., recluta a Tony Stark, Steve Rogers, Bruce Banner, Thor, Natasha Romanoff y Clint Barton para formar un equipo que debe evitar que Loki, hermano de Thor, se apodere de la Tierra.',
            'Genre' => 'Action',
            'Director' => 'Joss Whedon                ',
            'Producer' => 'Kevin Feige',
            'Actors' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth'
        ]);  
                
        Car::create([
            'Title' => 'Avengers',
            'Year' => 2012,
            'Description' => 'Marvel The Avengers4​ (titulada The Avengers: Los Vengadores en Hispanoamérica y Los Vengadores en España), o simplemente The Avengers, es una película de superhéroes estadounidense de 2012 basada en el equipo de superhéroes homónimo de Marvel Comics, producida por Marvel Studios y distribuida por Walt Disney Studios Motion Pictures, en colaboración con Paramount Pictures.N 1​ Es la sexta película del Universo cinematográfico de Marvel (UCM). La película fue escrita y dirigida por Joss Whedon, y cuenta con un reparto coral que incluye a Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson y Jeremy Renner como el equipo titular, junto a Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård y Samuel L. Jackson. En The Avengers, Nick Fury, director de la agencia de espionaje S.H.I.E.L.D., recluta a Tony Stark, Steve Rogers, Bruce Banner, Thor, Natasha Romanoff y Clint Barton para formar un equipo que debe evitar que Loki, hermano de Thor, se apodere de la Tierra.',
            'Genre' => 'Action',
            'Director' => 'Joss Whedon                ',
            'Producer' => 'Kevin Feige',
            'Actors' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth'
        ]);  

    }
}

<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'country' => 'USA',
                'release_year' => '1994',
                'genre' => 'Drama',
                'description' => "Andy Dufresne (Tim Robbins) is sentenced to two consecutive life terms in prison for the murders of his wife and her lover and is sentenced to a tough prison. However, only Andy knows he didn't commit the crimes. While there, he forms a friendship with Red (Morgan Freeman), experiences brutality of prison life, adapts, helps the warden, etc., all in 19 years."
                ],
            [
                'title' => 'The Godfather',
                'country' => '1972',
                'release_year' => 'USA',
                'genre' => 'Crime',
                'description' => "Widely regarded as one of the greatest films of all time, this mob drama, based on Mario Puzo's novel of the same name, focuses on the powerful Italian-American crime family of Don Vito Corleone (Marlon Brando). When the don's youngest son, Michael (Al Pacino), reluctantly joins the Mafia, he becomes involved in the inevitable cycle of violence and betrayal. Although Michael tries to maintain a normal relationship with his wife, Kay (Diane Keaton), he is drawn deeper into the family business."
                ],
            [
                'title' => 'The Dark Knight',
                'country' => 'USA',
                'release_year' => '2008',
                'genre' => 'Action',
                'description' => "With the help of allies Lt. Jim Gordon (Gary Oldman) and DA Harvey Dent (Aaron Eckhart), Batman (Christian Bale) has been able to keep a tight lid on crime in Gotham City. But when a vile young criminal calling himself the Joker (Heath Ledger) suddenly throws the town into chaos, the caped Crusader begins to tread a fine line between heroism and vigilantism."
                ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'country' => 'USA',
                'release_year' => '2001',
                'genre' => 'Fantasy',
                'description' => "The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged."
                ],
            [
                'title' => "Knockin' on Heaven's Door",
                'country' => 'Germany',
                'release_year' => '1997',
                'genre' => 'Drama',
                'description' => "In the center of the plot are two young guys - Rudy and Martin. By the will of fate, they end up in the same hospital ward, and both of them are given a fatal diagnosis. Each of them has no more than a week left to live, and therefore, having found a bottle of tequila, the guys decide to drink. During the conversation, Martin learns that his newfound companion has never seen the sea, and he is sure that this needs to be corrected immediately. Without thinking twice, the guys run away from the hospital, steal the car and go straight to the coast. Martin and Rudy do not have a cent in their pockets, and therefore they rob a gas station, and then a bank, for which the police start pursuing them. Soon it turns out that in the stolen car all the time there was a case with a million belonging to the leader of the mafia, and now his thugs are also following them .."
                ],
            [
                'title' => 'Intouchables',
                'country' => 'France',
                'release_year' => '2011',
                'genre' => 'Comedy',
                'description' => "An unlikely friendship develops between a wealthy quadriplegic (François Cluzet) and his caretaker (Omar Sy), just released from prison."
                ]
        ];

        Movie::insert($movies);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = [];

        for ($i = 1; $i <= 5; $i++) {
            $notes[] = [
                'note_subject' => 'Note № ' . $i,
                'note_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget aliquet nibh praesent tristique magna. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum. Amet commodo nulla facilisi nullam vehicula ipsum. Sed libero enim sed faucibus turpis in eu mi.',
                'note_author' => 'Author 1'
            ];
        }

        for ($i = 1; $i <= 3; $i++) {
            $notes[] = [
                'note_subject' => 'Note № ' . $i,
                'note_text' => 'Ut diam quam nulla porttitor. Fringilla urna porttitor rhoncus dolor. Eget est lorem ipsum dolor sit amet consectetur adipiscing.',
                'note_author' => 'Author 2'
            ];
        }

        for ($i = 1; $i <= 2; $i++) {
            $notes[] = [
                'note_subject' => 'Note № ' . $i,
                'note_text' => 'Molestie a iaculis at erat pellentesque adipiscing commodo elit. Fermentum et sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus. Arcu risus quis varius quam quisque id diam vel.',
                'note_author' => 'Author 3'
            ];
        }

        DB::table('notes')->insert($notes);
    }
}

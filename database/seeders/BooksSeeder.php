<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'A Tale of Two Cities',
            'author' => 'Charles Dickens',
            'year' => 1859,
            'synopsis' => 'A Tale of Two Cities is an historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution.',
            'image' => 'images\Tales_serial.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Lion, the Witch and the Wardrobe',
            'author' => 'C. S. Lewis',
            'year' => 1950,
            'synopsis' => 'The Lion, the Witch and the Wardrobe is a fantasy novel for children by C. S. Lewis, published by Geoffrey Bles in 1950. It is the first published and best known of seven novels in The Chronicles of Narnia.',
            'image' => 'images\TheLionWitchWardrobe(1stEd).jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'title' => 'Dream of the Red Chamber',
            'author' => 'Cao Xueqin',
            'year' => 1791,
            'synopsis' => 'Dream of the Red Chamber (Honglou Meng) or The Story of the Stone (Shitou Ji) is a novel composed by Cao Xueqin in the middle of the 18th century.',
            'image' => 'images\270px-Hongloumeng2.jpg'
        ]);
    }
}

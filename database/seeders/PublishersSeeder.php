<?php

namespace Database\Seeders;

use App\Models\Publishers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Falcon Publisher',
            'address' => 'Jl. Duren Tiga Raya No.35, RT.4/RW.1, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760',
            'phone' => '(021) 7974970',
            'email' => 'falconpublisher@gmail.com',
            'image' => 'data:image/png;'

        ]);
        DB::table('publishers')->insert([
            'name' => 'PT.Gramedia',
            'address' => 'East Mall, Grand Indonesia, Jl. M.H. Thamrin No.1, Kb. Melati, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310',
            'phone' => '(081) 213174943',
            'email' => 'gramedia@gmail.com',
            'image' => 'data:image/jpeg'
            
        ]);
        DB::table('publishers')->insert([
            'name' => 'Media Bintang Indonesia',
            'address' => 'Jl. Prof. Dr Satrio Kav. 6 Kelurahan Kecamatan Setiabudi, RT.4/RW.4, Kuningan, Karet Kuningan, Jakarta Selatan, DKI Jakarta, Daerah Khusus Ibukota Jakarta 12940',
            'phone' => '(021) 5255775',
            'email' => 'mediabintang@gmail.com',
            'image' => 'data:image/jpeg'
            
        ]);
    }
}

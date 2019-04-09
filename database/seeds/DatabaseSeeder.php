<?php

use App\dosen;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $dsn = Dosen::create();
        foreach (range(1,95) as $index){
            DB::table('dosens')->insert([
                'nip' => $dsn->nip,
                'namadosen' => $dsn->namadosen,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

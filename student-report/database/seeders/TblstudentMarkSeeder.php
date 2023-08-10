<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TblstudentMark;

class TblstudentMarkSeeder extends Seeder
{
    public function run()
    {
        TblstudentMark::factory(25)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Register;
use Faker\Factory as fakers;


class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $fake = fakers::create();
      for($i= 1; $i<=100;$i++){

          $customer = new Register;
          $customer->name = $fake->name;
          $customer->email=$fake->email;
          $customer->password= $fake->password;
          $customer->country= $fake->country;
          $customer->save();
    }
    
}
}

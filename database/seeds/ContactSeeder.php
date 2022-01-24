<?php

use Illuminate\Database\Seeder;
use \App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'email' => 'aisyahhumairohsalsabila@smkwikrama.sch.id',
            'slug' => 'aisyah-humairoh-salsabila'.\Str::random(10),
            'phone' => '+6285281351949',
            'address' => 'Kabupaten Sukabumi, Jawa Barat',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

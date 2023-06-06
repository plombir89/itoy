<?php

namespace Database\Seeders;

use App\Models\Contacts;
use App\Models\ContactsData;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacts::factory(1)->create()->each(function($contact){
            foreach (Language::getAdminLangs() as $lang){
                ContactsData::factory()->create([
                    'contact_id' => $contact->id,
                    'lang' => $lang->id,
                ]);
            }
        });
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Copyright;
use App\Models\Role;
use App\Models\User;
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
         $this->call(RoleSeeder::class);

         User::factory()->create([
             'name' => 'Web Dev',
             'email' => 'vasea_tutuc@mail.ru',
             'role_id' => Role::SUPER_ADMIN,
             'password' => bcrypt('asdasdasd')
         ]);

        $this->call(LanguageSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SupportSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductImagesSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(ScriptsSeeder::class);
        $this->call(AboutSeeder::class);

        Copyright::factory(1)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        DB::table('categories')->delete();

        Category::create(array('title' => 'Aged', 'description' => 'Donation for aged peoples', 'icon' => 'aged.png', 'status' => 1));
        Category::create(array('title' => 'Animal Welfare', 'description' => 'Donation for Animal welfare', 'icon' => 'animal.png', 'status' => 1));
        Category::create(array('title' => 'Arts, Culture, Humanities', 'description' => 'Donation for Different kind of arts, culture and humanitarian welfares', 'icon' => 'art.png', 'status' => 1));
        Category::create(array('title' => 'Children Charities', 'description' => 'Donation for child education and child labor.', 'icon' => 'child.png', 'status' => 1));    
        Category::create(array('title' => 'Education', 'description' => 'Donation for Education', 'icon' => 'education.png', 'status' => 1));
        Category::create(array('title' => 'Environment and Heritage', 'description' => 'Donation for Environmental and heritage welfares', 'icon' => 'heritage.png', 'status' => 1));
        Category::create(array('title' => 'Health', 'description' => 'Donation for health related welfares', 'icon' => 'health.png', 'status' => 1));
        Category::create(array('title' => 'Human Services', 'description' => 'Donation for Education', 'icon' => 'hservice.png', 'status' => 1));
        Category::create(array('title' => 'International', 'description' => 'Donation for Education', 'icon' => 'international.png', 'status' => 1));
        Category::create(array('title' => 'Public Benefit', 'description' => 'Donation for Education', 'icon' => 'pbenefit.png', 'status' => 1));
        Category::create(array('title' => 'Religon', 'description' => 'Donation for Education', 'icon' => 'religon.png', 'status' => 1));
        Category::create(array('title' => 'Rescue Services', 'description' => 'Donation for Education', 'icon' => 'rescue.png', 'status' => 1));
        Category::create(array('title' => 'Sport and Recreation', 'description' => 'Donation for Education', 'icon' => 'sports.png', 'status' => 1));
    }

}

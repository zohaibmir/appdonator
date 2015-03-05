<?php

class OrganisationTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        DB::table('organisations')->delete();

        Organisation::create(array('name' => 'Animal Protection Network', 'description' => 'Animal Protection Network is a Swedish non-profit organization with the primary purpose of ending the abuse of cats and dogs in Asia.<br /> Animal Protection Network is a Swedish non-profit organization, founded in Stockholm, 2004. The mission statement is to end the abuse and slaughter of cats and dogs in Asia, especially the different ways in which cats and dogs are tortured before being killed for the purpose of consumption or to be used as fur.', 'email' => 'lou@animalprotection.se', 'phone' => '0046-0001400', 'address' => 'Animal Protection Network, Box 24 198, SE-104 51 Stockholm', 'zip' => '24 198', 'city' =>'Stockholm', 'type' => 1, 'category_id' => 1, 'status' => 1, 'website' => 'http://www.animalprotection.se'));
        Organisation::create(array('name' => 'Animal Right', 'description' => 'Djurens Ratt (Animal Rights Sweden), is the largest animal rights organisation in Scandinavia, with a membership of about 36 000 (to be compared to Sweden’s entire population of 9 million). Animal Rights Sweden was formed in 1882 with the mission to end painful animal experiments. Since the 1970’s, the organisation is also dealing with other issues than animal experiments, especially concerning farm animals and fur production. Animal Rights Sweden is an animal rights organisation opposed to all experiments, procedures, production methods and other uses of animals that cause them pain, suffering and distress.<br /> Animals are sentient beings who are to be treated with respect, and humans have no morally acceptable reasons to expose animals to suffering.', 'email' => ' info@djurensratt.se', 'phone' => ' 08-55591400', 'address' => 'Djurens Rätt, Box 17132, 104 62 Stockholm', 'zip' => '17132', 'city' =>'Stockholm', 'type' => 1, 'category_id' => 1, 'status' => 1, 'website' => 'http://www.djurensratt.se/'));
        
    }

}

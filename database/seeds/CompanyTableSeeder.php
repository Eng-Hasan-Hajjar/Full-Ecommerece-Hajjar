<?php

use App\Company;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1; $i++) {
            $companyName = 'Techstar Agency';

            $userName = str_replace([' ', ','], '', $companyName);

            $domain = 'techstar.agency';

            Company::create([
                'status'               => 'active',
                'name'                 => $companyName,
                'website_name'         => $companyName,
                'slogan'               => 'techstar',
                'logo'                 => '/img/logo.png',
                'theme'                => '',
                'phone_number'         => $faker->e164PhoneNumber,
                'cell_phone'           => $faker->e164PhoneNumber,
                'address'              => 'MGl',
                'state'                => 'Mongolia',
                'city'                 => 'Ulaanbaatar',
                'zip_code'             => $faker->postcode,
                'facebook'             => $userName,
                'google_plus'          => $userName,
                'facebook_app_id'      => $faker->md5,
                'twitter'              => $userName,
                'email'                => 'info@'.$domain,
                'contact_email'        => 'contact@'.$domain,
                'sales_email'          => 'sales@'.$domain,
                'support_email'        => 'support@'.$domain,
                'website'              => 'http://'.$domain,
                'description'          => 'Techstar Ecommerce Platform',
                'keywords'             => 'Techstar, Ecommerce',
                'about_us'             => 'About Us',
                'refund_policy'        => trans('law.refund'),
                'privacy_policy'       => trans('law.privacy'),
                'terms_of_service'     => trans('law.terms'),
                'google_maps_key_api'  => 'AIzaSyCutQnEgrqX8W2X-nBCYB7-CbsTC-LlRMw',

            ]);
        }
    }
}

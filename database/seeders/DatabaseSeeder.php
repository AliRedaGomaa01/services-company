<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'a',
            'email' => 'a@a.a',
            'password' => bcrypt('a'),
        ]);

        $settings = [
            [
                'name' => 'email',
                'value_default' => 'info@gmail.com',
            ],
            [
                'name' => 'location url',
                'value_default' => '';
            ],
            [
                'name' => 'phone',
                'value_default' => '+123 456 7890',
            ],
            [
                'name' => 'work days',
                'value_en' => 'Sun - Thur: 9am - 5pm',
                'value_ar' => 'احد - خميس : 9am - 5pm'
            ],
            [
                'name' => 'phone',
                'value_default' => '+123 456 7890',
            ],
            [
                'name' => 'hotline',
                'value_default' => '+123 456 7890',
            ],
            [
                'name' => 'facebook',
                'value_default' => '#',
            ],
            [
                'name' => 'twitter',
                'value_default' => '#',
            ],
            [
                'name' => 'instagram',
                'value_default' => '#',
            ],
            [
                'name' => 'linkedin',
                'value_default' => '#',
            ],
            [
                'name' => 'whatsapp',
                'value_default' => '#',
            ],
            [
                'name' => 'about us header',
                'value_en' => 'We offer product design, <strong>manufacturing and engineering</strong> management services.',
                'value_ar' => 'نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري '
            ],
            [
                'name' => 'about us details',
                'value_en' => 'Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material.
                Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him few. If as increasing contrasted entreaties be.',
                'value_ar' => 'نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري  
                نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري نص اختباري  '
            ],
            [
                'name' => 'why choose us title',
                'value_en' => 'The Best Solution for all Industrial & Factory Businesses',
                'value_ar' => 'افضل الحلول لجميع المجالات'
            ],
            [
                'name' => 'why choose us details',
                'value_en' => 'Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. Although desirous not recurred disposed off shy you numerous securing.',
                'value_ar' => 'من نحن'
            ],
            [
                'name' => 'why choose us features',
                'value_en' => ['Competitive Price' , 'Quality Product' , 'Quick Delivery' , 'High-Tech Manufacturers'],
                'value_ar' => [],
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        };

        $reviews = [
            
        ];
        
        foreach ( $reviews as $review ) {
            Review::create( $review );
        };
    }
}

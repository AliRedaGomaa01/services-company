<?php

namespace Database\Seeders;

use App\Models\FAQ;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Client;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subservice;
use App\Models\TeamMember;
use App\Models\JointVenture;
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

        $this->call (SettingSeeder::class );
        
        $sliders = [
            
        ];
        
        foreach ( $sliders as $slider ) {
            Slider::create( $slider );
        };

        $reviews = [
            
        ];
        
        foreach ( $reviews as $review ) {
            Review::create( $review );
        };

        $clients = [
            
        ];
        
        foreach ( $clients as $client ) {
            Client::create( $client );
        };

        $services = [
            
        ];
        
        foreach ( $services as $service ) {
            Service::create( $service );
        };

        $categories = [
            
        ];
        
        foreach ( $categories as $category ) {
            Category::create( $category );
        };

        $galleries = [
            
        ];
        
        foreach ( $galleries as $gallery ) {
            Gallery::create( $gallery );
        };

        $posts = [
            
        ];
        
        foreach ( $posts as $post ) {
            Post::create( $post );
        };

        $faqs = [
            
        ];
        
        foreach ( $faqs as $faq ) {
            FAQ::create( $faq );
        };

        $subservices = [
            
        ];
        
        foreach ( $subservices as $subservice ) {
            Subservice::create( $subservice );
        };

        $jointVentures = [
            
        ];
        
        foreach ( $jointVentures as $jointVenture ) {
            JointVenture::create( $jointVenture );
        };

        $teamMembers = [
            
        ];
        
        foreach ( $teamMembers as $teamMember ) {
            TeamMember::create( $teamMember );
        };

    }
}

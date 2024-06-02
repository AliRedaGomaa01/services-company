<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use App\Models\Subservice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesCount = Service::count();

        $subserviceImages = [
            ['path' => '/frontend-assets/img/services/1.jpg'],
            ['path' => '/frontend-assets/img/services/2.jpg'],
            ['path' => '/frontend-assets/img/services/3.jpg'],
            ['path' => '/frontend-assets/img/services/4.jpg'],
        ];
        
        $subservices = [
            [
                'title_en' => 'Oil and Gass Energy',
                'title_ar' => 'طاقة الوقود والغاز',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
                'service_id' => rand(1,$servicesCount),
            ],
            [
                'title_en' => 'Agriculture Automation',
                'title_ar' => 'الأوتمة الزراعية',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
                'service_id' => rand(1,$servicesCount),
            ],
            [
                'title_en' => 'Civil Engineering',
                'title_ar' => 'الهندسة المدنية',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
                'service_id' => rand(1,$servicesCount),
            ],
            [
                'title_en' => 'Bridge Construction',
                'title_ar' => 'انشاء الكباري',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
                'service_id' => rand(1,$servicesCount),
            ],
        ];
        
        foreach ( $subservices as $key => $subservice ) {
            $image = Image::create( $subserviceImages[$key] );
            Subservice::create( [...$subservice , 'image_id' => $image->id] );
        };
    }
}

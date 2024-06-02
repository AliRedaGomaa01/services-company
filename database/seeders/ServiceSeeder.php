<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceImages = [
            ['path' => '/frontend-assets/img/services/1.jpg'],
            ['path' => '/frontend-assets/img/services/2.jpg'],
            ['path' => '/frontend-assets/img/services/3.jpg'],
            ['path' => '/frontend-assets/img/services/4.jpg'],
        ];
        
        $services = [
            [
                'title_en' => 'Oil and Gass Energy',
                'title_ar' => 'طاقة الوقود والغاز',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
            ],
            [
                'title_en' => 'Agriculture Automation',
                'title_ar' => 'الأوتمة الزراعية',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
            ],
            [
                'title_en' => 'Civil Engineering',
                'title_ar' => 'الهندسة المدنية',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
            ],
            [
                'title_en' => 'Bridge Construction',
                'title_ar' => 'انشاء الكباري',
                'description_en' => 'It\'s a very critical service. We are pioneers in this field.',
                'description_ar' => 'هي خدمة فائقة الاهمية. ونحن رواد في هذا المجال.',
            ],
        ];
        
        foreach ( $services as $key => $service ) {
            $image = Image::create( $serviceImages[$key] );
            Service::create( [...$service , 'image_id' => $image->id] );
        };
    }
}

<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliderImages = [
            ['path' => '/frontend-assets/img/banner/1.jpg'],
            ['path' => '/frontend-assets/img/banner/2.jpg'],
            ['path' => '/frontend-assets/img/banner/3.jpg'],
        ];
        
        $sliders = [
            [
                'title_en' => 'Since 1985',
                'title_ar' => 'منذ 1985',
                'description_en' => 'Expert knowledge in <span>Technical</span> Solutions',
                'description_ar' => 'معرفة مزدوجة بالخبرة في الحلول التقنية',
            ],
            [
                'title_en' => 'Expert in',
                'title_ar' => 'خبير في ',
                'description_en' => 'Empowering oil Refiling & <span>Processing</span> plants',
                'description_ar' => 'ريادة في ملئ الزيوت والصيانة البترولية',
            ],
            [
                'title_en' => 'Let\'s grow together',
                'title_ar' => 'سننمو معا',
                'description_en' => 'Build <span>innovative</span> industrial solutions</h1>',
                'description_ar' => 'نبني الحلول الصناعية المبتكرة',
            ],
        ];
        
        foreach ( $sliders as $key => $slider ) {
            $image = Image::create( $sliderImages[$key] );
            Slider::create( [...$slider , 'image_id' => $image->id] );
        };
    }
}

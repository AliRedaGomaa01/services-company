<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'email',
                'value_default' => 'info@gmail.com',
            ],
            [
                'name' => 'location url',
                'value_default' => '#';
            ],
            [
                'name' => 'phone',
                'value_default' => '+123 456 7890',
            ],

            [
                'name' => 'phone',
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
                'name' => 'work days',
                'value_en' => 'Sun - Thur: 9am - 5pm',
                'value_ar' => 'احد - خميس : 9am - 5pm'
            ],
            [
                'name' => 'about us header',
                'value_en' => 'We offer product design, <strong>manufacturing and engineering</strong> management services.',
                'value_ar' => 'نحن نقدم خدمات تصميم المنتجات والتصنيع والإدارة الهندسية.'
            ],
            [
                'name' => 'about us details',
                'value_en' => 'Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material.
                Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him few. If as increasing contrasted entreaties be.',
                'value_ar' => ' سبعة عالم يفكرون في توقيتها. أفسد الغرف الكبيرة منذ ذلك الحين. أنا مستيقظ غير راغبة في الحرص على عدم الراحة. إدراك نهاية المعرفة بالتأكيد يوم الحلاوة لماذا بكل ود. اسأل عرضًا سريعًا من ستة وسبعة وانظر من بين. التقى وسيم يناقش مادة عمر المسكن سيدي.
                المشاعر اثنين من الاهتمام المهين في بعض الأحيان السفر واحد يتناقض. يوم الحظ خارج حفلات الزواج. السعادة تبقى فرحة ولكن بجدية للانطلاق. استغرق بيعها إضافة اللعب قد لا شيء منه قليل. إذا كانت التوسلات المتناقضة المتزايدة تكون. '
            ],
            [
                'name' => 'why choose us title',
                'value_en' => 'The Best Solution for all Industrial & Factory Businesses',
                'value_ar' => 'الحل الأفضل لجميع الأعمال الصناعية والمصانع'
            ],
            [
                'name' => 'why choose us details',
                'value_en' => 'Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. Although desirous not recurred disposed off shy you numerous securing.',
                'value_ar' => 'يعتمد اليقين على اكتشافه، وهو أمر مسيء بشكل مقبول. لحم الخنزير للاهتمام المتبقي في بعض الأحيان يوصي الإضافات بالدهون لدينا. الاتجاه لديه الغرباء يصدقون الآن. يتمتع الاحترام بصالات العرض المكشوفة للمثليين. استمتع باستخدام الرجال المستمعين بشكل مقبول. لا يوجد شيء غريب في وسيم معًا مفتوحًا. مقال يتعلق بالفرحة القلقة صورة سيدي لها. على الرغم من رغبتك في عدم تكرار التخلص منك، فإنك تخجل من تأمين الكثير.'
            ],
            [
                'name' => 'why choose us features',
                'value_en' => ['Competitive Price' , 'Quality Product' , 'Quick Delivery' , 'High-Tech Manufacturers'],
                'value_ar' => ["الأسعار التنافسية", "منتجات عالية الجودة", "التسليم السريع", "مصنعو التكنولوجيا الفائقة"],
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        };
    }
}

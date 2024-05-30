<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'value' => 'info@gmail.com',
            ],
            [
                'name' => 'location url',
                'value' => '#',
            ],
            [
                'name' => 'phone',
                'value' => '+123 456 7890',
            ],
            [
                'name' => 'facebook',
                'value' => '#',
            ],
            [
                'name' => 'twitter',
                'value' => '#',
            ],
            [
                'name' => 'instagram',
                'value' => '#',
            ],
            [
                'name' => 'linkedin',
                'value' => '#',
            ],
            [
                'name' => 'whatsapp',
                'value' => '#',
            ],
            [
                'name' => 'work_days_arabic',
                'value' => 'احد - خميس : 9am - 5pm'
            ],
            [
                'name' => 'work_days_english',
                'value' => 'Sun - Thur: 9am - 5pm',
            ],
            [
                'name' => 'about_us_header_arabic',
                'value' => 'نحن نقدم خدمات تصميم المنتجات والتصنيع والإدارة الهندسية.',
            ],
            [
                'name' => 'about_us_header_english',
                'value' => 'We offer product design, <strong>manufacturing and engineering</strong> management services.',
            ],
            [
                'name' => 'about_us_details_arabic',
                'value' => ' سبعة عالم يفكرون في توقيتها. أفسد الغرف الكبيرة منذ ذلك الحين. أنا مستيقظ غير راغبة في الحرص على عدم الراحة. إدراك نهاية المعرفة بالتأكيد يوم الحلاوة لماذا بكل ود. اسأل عرضًا سريعًا من ستة وسبعة وانظر من بين. التقى وسيم يناقش مادة عمر المسكن سيدي.
                المشاعر اثنين من الاهتمام المهين في بعض الأحيان السفر واحد يتناقض. يوم الحظ خارج حفلات الزواج. السعادة تبقى فرحة ولكن بجدية للانطلاق. استغرق بيعها إضافة اللعب قد لا شيء منه قليل. إذا كانت التوسلات المتناقضة المتزايدة تكون. '
            ],
            [
                'name' => 'about_us_details_english',
                'value' => 'Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material.
                Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him few. If as increasing contrasted entreaties be.',
            ],
            [
                'name' => 'why_choose_us_title_arabic',
                'value' => 'الحل الأفضل لجميع الأعمال الصناعية والمصانع'
            ],
            [
                'name' => 'why_choose_us_title_english',
                'value' => 'The Best Solution for all Industrial & Factory Businesses',
            ],
            [
                'name' => 'why_choose_us_details_arabic',
                'value' => 'يعتمد اليقين على اكتشافه، وهو أمر مسيء بشكل مقبول. لحم الخنزير للاهتمام المتبقي في بعض الأحيان يوصي الإضافات بالدهون لدينا. الاتجاه لديه الغرباء يصدقون الآن. يتمتع الاحترام بصالات العرض المكشوفة للمثليين. استمتع باستخدام الرجال المستمعين بشكل مقبول. لا يوجد شيء غريب في وسيم معًا مفتوحًا. مقال يتعلق بالفرحة القلقة صورة سيدي لها. على الرغم من رغبتك في عدم تكرار التخلص منك، فإنك تخجل من تأمين الكثير.'
            ],
            [
                'name' => 'why_choose_us_details_english',
                'value' => 'Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. Although desirous not recurred disposed off shy you numerous securing.',
            ],
            [
                'name' => 'why_choose_us_features_arabic',
                'value' => 'مصنعو التكنولوجيا الفائقة + التسليم السريع + منتجات عالية الجودة + الأسعار التنافسية'
            ],
            [
                'name' => 'why_choose_us_features_english',
                'value' => 'High-Tech Manufacturers + Quick Delivery + Competitive Price + Quality Product'
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        };
    }
}

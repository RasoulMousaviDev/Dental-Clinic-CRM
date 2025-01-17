<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            'آذربایجان شرقی' => [
                'آذرشهر','اسکو','اهر','بستان‌آباد','بناب','تبریز','جلفا','چاراویماق','سراب','شبستر','عجب‌شیر','کلیبر','مراغه','مرند','ملکان','میانه','ورزقان','هریس','هشترود',
            ],
            'آذربایجان غربی' => [
                'ارومیه','اشنویه','ایواوغلی','باروق','بازرگان','بوکان','پلدشت','پیرانشهر','تازه‌شهر','تکاب','چهاربرج','خوی','داشباشی','دیواندره','ربط','سلماس','سیه‌چشمه (چالدران)','شاهین‌دژ','شوط','قره‌ضیاءالدین (چایپاره)','قوشچی','کشاورز','ماکو','محمدیار','محمودآباد','مهاباد','میاندوآب','نالوس','نقده','واوان',
            ],
            'اردبیل' => [
                'اردبیل','بیله‌سوار','پارس‌آباد','خلخال','مشگین‌شهر','گرمی','نمین','نیر','اصلاندوز','عنبران','کلور','هشتجین','مرادلو','جعفرآباد','آبی‌بیگلو',
            ],
            'اصفهان' => [
                'آران و بیدگل','اردستان','اصفهان','بادرود','برخوار','بوئین و میاندشت','تیران و کرون','جرقویه علیا','چادگان','خمینی‌شهر','خوانسار','خور و بیابانک','دهاقان','زرین‌شهر','سمیرم','شاهین‌شهر','شهرضا','فریدن','فریدون‌شهر','فلاورجان','کاشان','گلپایگان','لنجان','مبارکه','نایین','نجف‌آباد','نطنز','ورزنه','هرند','میمه',
            ],
            'البرز' => [
                'کرج','فردیس','نظرآباد','ساوجبلاغ','اشتهارد','ماهدشت','مشکین‌دشت','کوهسار','تنکمان','چهارباغ','طالقان',
            ],
            'ایلام' => [
                'ایلام','دهلران','ایوان','مهران','آبدانان','دره‌شهر','چرداول','سرابله','بدره','ملکشاهی','پهله','میمه','مورموری','زرنه','ماژین',
            ],
            'بوشهر' => [
                'بوشهر','دشتستان','گناوه','دشتی','تنگستان','کنگان','دیلم','جم','عسلویه','دیر','بردخون','خارک','اهرم','خورموج','کاکی','برازجان','آبدان','سیراف','نخل تقی','چغادک',
            ],
            'تهران' => [
                'تهران','اسلام‌شهر','شهریار','ملارد','قدس','رباط کریم','ورامین','پاکدشت','قرچک','دماوند','فیروزکوه','پردیس','باقرشهر','شریف‌آباد','ری','اندیشه','جوادآباد','کهریزک',
            ],
            'چهارمحال و بختیاری' => [
                'شهرکرد','بروجن','فرخ‌شهر','لردگان','فارسان','سامان','چلگرد','سفیددشت','بلداجی','کیان','گندمان','هفشجان','نقنه','جونقان','آلونی','دشتک','شلمزار','باباحیدر','فرادنبه',
            ],
            'خراسان جنوبی' => [
                'بیرجند','قائن','طبس','فردوس','نهبندان','سربیشه','درمیان','سرایان','بشرویه','خوسف','اسدیه','دیهوک','آیسک','مود','سه‌قلعه','شوسف',
            ],
            'خراسان رضوی' => [
                'مشهد','نیشابور','سبزوار','تربت حیدریه','تربت جام','گناباد','کاشمر','فریمان','خواف','قوچان','چناران','بردسکن','درگز','طرقبه','سرخس','رشتخوار','خلیل‌آباد','بجستان','نیل‌شهر','باخرز','ریوش','صالح‌آباد',
            ],
            'خراسان شمالی' => [
                'بجنورد','شیروان','اسفراین','مانه و سملقان','جاجرم','فاروج','گرمه','راز و جرگلان',
            ],
            'خوزستان' => [
                'اهواز','آبادان','خرمشهر','دزفول','ماهشهر','بهبهان','شادگان','اندیمشک','شوشتر','ایذه','بندر امام خمینی','رامهرمز','شوش','هویزه','امیدیه','لالی','حمیدیه','باغ ملک','مسجدسلیمان','رامشیر','هندیجان','آغاجاری',
            ],
            'زنجان' => [
                'زنجان','ابهر','خرمدره','قیدار','ماهنشان','ایجرود','سلطانیه','طارم',
            ],
            'سمنان' => [
                'سمنان','شاهرود','دامغان','گرمسار','مهدی‌شهر','ایوانکی','میامی','آرادان',
            ],
            'سیستان و بلوچستان' => [
                'زاهدان','چابهار','ایرانشهر','سراوان','خاش','نیکشهر','کنارک','زهک','زابل','هیرمند','قصرقند','میرجاوه','فنوج','راسک','دلگان','نیمروز','سیب و سوران','مهرستان',
            ],
            'فارس' => [
                'شیراز','کازرون','مرودشت','فسا','جهرم','لار','نورآباد','داراب','نی‌ریز','اقلید','زرقان','لامرد','سپیدان','آباده','قیر و کارزین','مهر','خنج','خرامه','سروستان','فراشبند','بوانات','ارسنجان','بیضا','رستم',
            ],
            'قزوین' => [
                'قزوین','الوند','محمدیه','تاکستان','آبیک','اقبالیه','بویین زهرا','شال','خرمدشت','آبگرم','اسفرورین','سیردان','دانسفهان','رازمیان','معلم‌کلایه','ضیاءآباد',
            ],
            'قم' => [
                'قم','جعفریه','کهک','دستجرد','سلفچگان','قنوات',
            ],
            'کردستان' => [
                'سنندج','سقز','مریوان','بانه','کامیاران','بیجار','دهگلان','دیواندره','قروه','اورامان تخت','زرینه','موچش','برده‌رشه','چناره',
            ],
            'کرمان' => [
                'کرمان','رفسنجان','جیرفت','زرند','بم','سیرجان','کهنوج','راور','رودبار جنوب','عنبرآباد','بردسیر','بافت','فهرج','نرماشیر','منوجان','ریگان','ارزوییه','ماهان','شهداد','گلباف',
            ],
            'کرمانشاه' => [
                'کرمانشاه','اسلام‌آباد غرب','هرسین','سنقر','صحنه','کنگاور','پاوه','گیلانغرب','جوانرود','سرپل ذهاب','قصر شیرین','روانسر','بیستون','نودشه','نوسود','ریجاب',
            ],
            'کهگیلویه و بویراحمد' => [
                'یاسوج','دهدشت','دوگنبدان (گچساران)','لیکک','باشت','سی‌سخت','چرام','لنده','مارگون',
            ],
            'گلستان' => [
                'گرگان','گنبد کاووس','علی‌آباد کتول','آق‌قلا','مینودشت','کلاله','بندر ترکمن','بندر گز','آزادشهر','گالیکش','مراوه‌تپه','رامیان','کردکوی','نگین‌شهر','خان‌ببین',
            ],
            'گیلان' => [
                'رشت','انزلی','لاهیجان','آستانه اشرفیه','تالش','رودبار','صومعه سرا','فومن','شفت','سیاهکل','ماسال','دولت‌آباد','خشکبیجار',
            ],
            'لرستان' => [
                'خرم‌آباد','بروجرد','دورود','ازنا','پلدختر','الشتر','کوهدشت','چگنی','دلفان','رومشکان',
            ],
            'مازندران' => [
                'ساری','بابل','بابلسر','نوشهر','آمل','چالوس','تنکابن','قائم‌شهر','جویبار','نکا','بهشهر','گلوگاه','فریدون‌کنار','پیشرفته','ایزدشهر',
            ],
            'مرکزی' => [
                'اراک','خنداب','محلات','ساوه','کمیجان','تفرش','دلیجان','زرندیه','آشتیان','شازند',
            ],
            'هرمزگان' => [
                'بندرعباس','قشم','کیش','بندر لنگه','بندر کنگ','هرمز','گیشا','بستک','رودان','میناب','حاجی‌آباد','پارسیان','شهرستان بستک',
            ],
            'همدان' => [
                'همدان','ملایر','نهاوند','تویسرکان','کبودرآهنگ','رزن','اسدآباد','بهار','فامنین','کمشجه',
            ],
            'یزد' => [
                'یزد','اردکان','میبد','تفت','بافق','مهریز','اشکذر','فهرج','چاهداشتی','نیر',
            ],
        ];

        foreach ($provinces as $title => $cities) {
            $province = Province::create(compact('title'));

            City::insert(collect($cities)->map(fn($city) => [
                'province_id' => $province->id,
                'title' => $city,
            ])->toArray());
        }
    }
}

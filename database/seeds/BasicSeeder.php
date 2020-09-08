<?php

use App\Models\Basic;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $letters=['அ','ஆ','இ','ஈ','உ','ஊ','எ','ஏ','ஐ','ஒ','ஓ','ஔ'];
        $extrainfos=['அம்மா','ஆடு','இலை','ஈட்டி','உடை','ஊஞ்சல்','எலி','ஏணி','ஐவர்','ஒட்டகம்','ஓநாய்','ஔடதம்'];
        $translations=['Mother','Goat','Leaf','Spear','Dress','Swing','Rat','Ladder','Five People','camel','Wolf','Medicine'];
        $letterimages=['/data/letters/uyir/mother.png',
                        '/data/letters/uyir/goat.jpg',
                        '/data/letters/uyir/leaf.jpg',
                        '/data/letters/uyir/spear.png',
                        '/data/letters/uyir/dress.jpg',
                        '/data/letters/uyir/swing.jpg',
                        '/data/letters/uyir/rat.png',
                        '/data/letters/uyir/ladder.png',
                        '/data/letters/uyir/five_people.jpg',
                        '/data/letters/uyir/camel.jpg',
                        '/data/letters/uyir/wolf.jpg',
                        '/data/letters/uyir/medicine.jpg'
                        
                    ];
        $lettersounds=[
                         '/data/letters/uyir/sounds/a.mp3',
                         '/data/letters/uyir/sounds/aa.mp3',
                         '/data/letters/uyir/sounds/e.mp3',
                         '/data/letters/uyir/sounds/ee.mp3',
                         '/data/letters/uyir/sounds/u.mp3',
                         '/data/letters/uyir/sounds/uu.mp3',
                         '/data/letters/uyir/sounds/ae.mp3',
                         '/data/letters/uyir/sounds/aaee.mp3',
                         '/data/letters/uyir/sounds/i.mp3',
                         '/data/letters/uyir/sounds/o.mp3',
                         '/data/letters/uyir/sounds/oo.mp3',
                         '/data/letters/uyir/sounds/ou.mp3',

                    ];            
        
        $letterinfos=array_map(null,$letters,$translations,$extrainfos,$letterimages,$lettersounds);
        $letterCategory=Category::where('category_english','LIKE','letters')->first()->id;
        foreach($letterinfos as $letterinfo)
        {
            $basic = new Basic;

            $basic->category_id=$letterCategory;
            $basic->name=$letterinfo[0];
            $basic->extrainfo=$letterinfo[1];
            $basic->translation=$letterinfo[2];
            $basic->image=$letterinfo[3];
            $basic->audio=$letterinfo[4];

            $basic->save();
        }

        /*------------------------------------End of Letters-------------------------------------------------------*/

        $numbers=['1','2','3','4','5','6','7','8','9','10'];
        $numextrainfos=['ஒன்று','இரண்டு','மூன்று','நான்கு','ஐந்து','ஆறு','ஏழு','எட்டு','ஒன்பது','பத்து'];
        $numtranslations=['One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'];
        $numberimages=['/data/numbers/one.png',
                        '/data/numbers/two.jpg',
                        '/data/numbers/three.jpg',
                        '/data/numbers/four.png',
                        '/data/numbers/five.png',
                        '/data/numbers/six.png',
                        '/data/numbers/seven.jpg',
                        '/data/numbers/eight.jpg',
                        '/data/numbers/nine.jpg',
                        '/data/numbers/ten.png',
                    
                    ];
        $numbersounds=[
                         '/data/numbers/sounds/1.mp3',
                         '/data/numbers/sounds/2.mp3',
                         '/data/numbers/sounds/3.mp3',
                         '/data/numbers/sounds/4.mp3',
                         '/data/numbers/sounds/5.mp3',
                         '/data/numbers/sounds/6.mp3',
                         '/data/numbers/sounds/7.mp3',
                         '/data/numbers/sounds/8.mp3',
                         '/data/numbers/sounds/9.mp3',
                         '/data/numbers/sounds/10.mp3',

                    ];            
        
        $numberinfos=array_map(null,$numbers,$numtranslations,$numextrainfos,$numberimages,$numbersounds);
        
        $numberCategory=Category::where('category_english','LIKE','numbers')->first()->id;
        foreach($numberinfos as $numberinfo)
        {
            $basic = new Basic;

            $basic->category_id=$numberCategory;           
            $basic->name=$numberinfo[0];
            $basic->translation=$numberinfo[1];
            $basic->extrainfo=$numberinfo[2];
            $basic->image=$numberinfo[3];
            $basic->audio=$numberinfo[4];

            $basic->save();
        }

       /*-----------------------------------------------------------------------------*/
        
    }
}

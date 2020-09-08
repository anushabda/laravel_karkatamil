<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryTamil=['எழுத்துகள்','எண்கள்','நிறங்கள்','குடும்பம்','வகுப்பறை','விலங்குகள்'];
        $categoryEnglish=['Letters','Numbers','Colours','Family','Classroom','Animals'];
        
        function save_categories($tamil,$english){
            $category=new Category;
            $category->category_name=$tamil;
            $category->category_english=$english;

            $category->save();
        }
        array_map('save_categories', $categoryTamil,  $categoryEnglish);
        

    }
}

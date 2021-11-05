<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 2);
        $findSection->delete();
        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = '&nbsp;';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = ' &nbsp; ';
        $section_language->save();

        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = '&nbsp;';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = ' &nbsp; ';
        $section_language->save();

        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = '&nbsp;';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 2;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = ' &nbsp; ';
        $section_language->save();
    }
}

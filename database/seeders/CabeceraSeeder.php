<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class CabeceraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 1);
        $findSection->delete();
        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = '<h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">
        ESCUELA DE MEDICINA
        <span class="text-primary">HOLÍSTICA DEL AURA</span><br>
        </h1>
        <p class="d-block d-lg-none d-xl-block text-sm-start">BIOL. TPTA. JULIETA HUERTA
        HERNÁNDEZ </p>';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = ' &nbsp; ';
        $section_language->save();

        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = '<h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">
        HOLISTIC AURIC 
        <span class="text-primary">MEDICINE SCHOOL</span><br>
        </h1>
        <p class="d-block d-lg-none d-xl-block text-sm-start">BIOL. TPTA. JULIETA HUERTA
        HERNÁNDEZ </p>';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = ' &nbsp; ';
        $section_language->save();

        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = '<h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">
        ÉCOLE DE MÉDECINE 
        <span class="text-primary">HOLISTIQUE DE L´AURA</span><br>
        </h1>
        <p class="d-block d-lg-none d-xl-block text-sm-start">BIOL. TPTA. JULIETA HUERTA
        HERNÁNDEZ </p>';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 1;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = ' &nbsp; ';
        $section_language->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 8);
        $findSection->delete();

        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_home';
        $section_language->lang = 'es';
        $section_language->description = 'Inicio';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'send';
        $section_language->lang = 'es';
        $section_language->description = 'Enviar';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'contact_received';
        $section_language->lang = 'es';
        $section_language->description = 'Gracias por escribirnos';
        $section_language->save();


        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_course';
        $section_language->lang = 'es';
        $section_language->description = 'Cursos';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_therapy';
        $section_language->lang = 'es';
        $section_language->description = 'Terapias';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_workshop';
        $section_language->lang = 'es';
        $section_language->description = 'Talleres';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_book';
        $section_language->lang = 'es';
        $section_language->description = 'Libros';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_contact';
        $section_language->lang = 'es';
        $section_language->description = 'Contacto';
        $section_language->save();
        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_home';
        $section_language->lang = 'en';
        $section_language->description = 'Home';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'contact_received';
        $section_language->lang = 'en';
        $section_language->description = 'Thanks for writing us';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'send';
        $section_language->lang = 'en';
        $section_language->description = 'Send';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_course';
        $section_language->lang = 'en';
        $section_language->description = 'COURSES';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_therapy';
        $section_language->lang = 'en';
        $section_language->description = 'THERAPIES';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_workshop';
        $section_language->lang = 'en';
        $section_language->description = 'WORKSHOPS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_book';
        $section_language->lang = 'en';
        $section_language->description = 'BOOKS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_contact';
        $section_language->lang = 'en';
        $section_language->description = 'CONTACT';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_home';
        $section_language->lang = 'fr';
        $section_language->description = 'ACCUENIL';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'contact_received';
        $section_language->lang = 'fr';
        $section_language->description = 'Merci de nous avoir écrit';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'send';
        $section_language->lang = 'fr';
        $section_language->description = 'Envoyer';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_course';
        $section_language->lang = 'fr';
        $section_language->description = 'COURS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_therapy';
        $section_language->lang = 'fr';
        $section_language->description = 'THÉRAPIES';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_workshop';
        $section_language->lang = 'fr';
        $section_language->description = 'ATELIERS';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_book';
        $section_language->lang = 'fr';
        $section_language->description = 'LIVRES';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 8;
        $section_language->name = 'menu_contact';
        $section_language->lang = 'fr';
        $section_language->description = 'CONTACTER';
        $section_language->save();
    }
}

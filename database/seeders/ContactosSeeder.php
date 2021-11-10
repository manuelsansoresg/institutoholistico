<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 7);
        $findSection->delete();

        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'CONTACTO';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = 'Mándanos tu nombre, ciudad y país donde vives, teléfono celular, correo electrónico y tu comentario. Gracias.';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email_contact';
        $section_language->lang = 'es';
        $section_language->description = 'julietahuertahernandez@gmail.com';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'celular_contact';
        $section_language->lang = 'es';
        $section_language->description = '+52 3311359027';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'youtube_contact';
        $section_language->lang = 'es';
        $section_language->description = 'Julieta Huerta Hernández ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'pages_facebook_contact';
        $section_language->lang = 'es';
        $section_language->description = '
        Libro: Anatomía y fisiología del aura. 
        <br>
        Escuela de Medicina Holística del Aura. 
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'name';
        $section_language->lang = 'es';
        $section_language->description = 'Nombre';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'city';
        $section_language->lang = 'es';
        $section_language->description = 'Ciudad';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'country';
        $section_language->lang = 'es';
        $section_language->description = 'País ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'telephone';
        $section_language->lang = 'es';
        $section_language->description = 'Teléfono  celular';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email';
        $section_language->lang = 'es';
        $section_language->description = 'correo electrónico   ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'comment';
        $section_language->lang = 'es';
        $section_language->description = 'Comentario';
        $section_language->save();

        // ingles
        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'CONTACT';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = 'Send us your name, city and country where you live, cell phone, email and your comment. Thanks. ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email_contact';
        $section_language->lang = 'en';
        $section_language->description = 'julietahuertahernandez@gmail.com';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'celular_contact';
        $section_language->lang = 'en';
        $section_language->description = '+52 3311359027';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'youtube_contact';
        $section_language->lang = 'en';
        $section_language->description = 'Julieta Huerta Hernández ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'pages_facebook_contact';
        $section_language->lang = 'en';
        $section_language->description = '
        Libro: Anatomía y fisiología del aura. 
        <br>
        Escuela de Medicina Holística del Aura. 
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'name';
        $section_language->lang = 'en';
        $section_language->description = 'Name';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'city';
        $section_language->lang = 'en';
        $section_language->description = 'City';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'country';
        $section_language->lang = 'en';
        $section_language->description = 'Country';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'telephone';
        $section_language->lang = 'en';
        $section_language->description = 'Cell phone';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email';
        $section_language->lang = 'en';
        $section_language->description = 'email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'comment';
        $section_language->lang = 'en';
        $section_language->description = 'comment';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'CONTACTER';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = 'Envoyez-nous votre nom, ville et pays où vous habitez, téléphone portable, email et votre commentaire. Merci.';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email_contact';
        $section_language->lang = 'fr';
        $section_language->description = 'julietahuertahernandez@gmail.com';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'celular_contact';
        $section_language->lang = 'fr';
        $section_language->description = '+52 3311359027';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'youtube_contact';
        $section_language->lang = 'fr';
        $section_language->description = 'Julieta Huerta Hernández ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'pages_facebook_contact';
        $section_language->lang = 'fr';
        $section_language->description = '
        Libro: Anatomía y fisiología del aura. 
        <br>
        Escuela de Medicina Holística del Aura. 
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'name';
        $section_language->lang = 'fr';
        $section_language->description = 'Nom';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'city';
        $section_language->lang = 'fr';
        $section_language->description = 'Ville';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'country';
        $section_language->lang = 'fr';
        $section_language->description = 'Pays';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'telephone';
        $section_language->lang = 'fr';
        $section_language->description = 'Téléphone portable';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'email';
        $section_language->lang = 'fr';
        $section_language->description = 'email';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 7;
        $section_language->name = 'comment';
        $section_language->lang = 'fr';
        $section_language->description = 'commentaire';
        $section_language->save();
    }
}

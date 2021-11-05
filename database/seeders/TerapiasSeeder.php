<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class TerapiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 4);
        $findSection->delete();

        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'TERAPIAS';
        $section_language->save();
        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'THERAPIES';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'THÉRAPIES';
        $section_language->save();
        /* ----------- descripcion--------------- */
        /* español */

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = '
        A) Individuales: Se usan varias áreas de la medicina alternativa como biodescodificación, theta healing, terapia floral, medicina germánica, par biomagnético, transgeneracional, registros akashicos, y más; siempre con las bases de la medicina del aura. Es por cita y contactarse por Whatsapp al 52 3311359027. 
        <br><br>
        B) Grupales on line: En cada sesión se trabaja un tema distinto de la vida, desde la salud física hasta lo mental, emocional y espiritual; como por ejemplo: sistema digestivo, circulatorio, sanando a mamá y papá, ancestros, vidas pasadas, creencias limitantes y que bloquean tu vida, etc. Se inicia con clase y se termina con la terapia grupal. Son una vez cada semana y dura hora y media. Hay horario en la mañana y en la tarde. 
        ';
        $section_language->save();
        /* ingles */

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = '
        A) Individual: Various areas of alternative medicine are used such as biodecoding, theta 
        healing, flower therapy, Germanic medicine, biomagnetic pair, transgenerational, Akashic 
        records, and more; always with the bases of auric medicine. They are by appointment only. 
        Please contact by WhatsApp at 52 3311359027. 
        <br><br>
        B) On-line group therapy: In each session a different topic of life is worked on. From 
        physical to mental, emotional and spiritual health; such as: digestive, circulatory system, 
        healing mom and dad, ancestors, past lives, limiting beliefs that block your life, etc. It 
        begins with class and ends with group therapy. They are once a week and last an hour and a 
        half. There are hours in the morning and in the afternoon. 
        ';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'COURS DE MÉDECINE AURIQUE';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 4;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = "
        A) Individuel: Divers domaines de la médecine alternative sont utilisés, tels que le biodécodage, thêta healing, la thérapie par les fleurs, la médecine germanique, les paires biomagnétiques, les registres akashiques, transgénérationnels, etc. toujours avec les bases de la médecine de l'aura. La session est sur rendez-vous, veuillez prendre contact par WhatsApp au +52 3311359027. 
        <br><br>
        B) Groupes en ligne: Dans chaque session, un sujet de vie différent est travaillé, de la santé physique, mentale, émotionnelle et spirituelle; tels que: système digestif, système circulatoire, guérison mère et père, les ancêtres, vies antérieures, croyances limitantes qui bloquent votre vie, etc. Cela commence par une théorie et se termine par la thérapie de groupe. Ils sont donnés une fois par semaine et durent une heure et demie. Il y a des sessions le matin et l'après-midi. 
        ";
        $section_language->save();
    }
}

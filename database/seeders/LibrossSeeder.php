<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class LibrossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 6);
        $findSection->delete();

        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'LIBROS';
        $section_language->save();
        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'BOOKS';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'LIVRES';
        $section_language->save();
        /* ----------- descripcion--------------- */
        /* español */

        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = '
        A través de las páginas de este libro descubrirás que el aura y los chakras son más de lo que conoces, que están constituidos por células que forman tejidos, órganos y sistemas cuyas partículas subatómicas vibran en una frecuencia mayor a las del cuerpo físico, razón por la cual no los podemos ver ni tocar. Para que el SER pueda tener una experiencia humana se requieren 20 campos áuricos, cuyos procesos están coordinados por las esferas mentales que son parte del cerebro del Alma. 
        <br><br>
        b) Mi energía, mi salud. La respuesta para la sanación de las enfermedades:  
        <br><br>
        A lo largo de este libro encontrarás información sobre como es el aura, como funciona y como generamos las enfermedades y eventos positivos como negativos en nuestra vida. Aprenderás como es el lenguaje de tu cuerpo, lo que te quiere decir. También se da consejos, meditaciones y ejercicios para sanar y mejorar tu vida. Se habla sobre la medicina alopática, alternativa y la nueva medicina del aura que es la base de la medicina alternativa u holística y como combinarlas para una recuperación de la salud. 
        ';
        $section_language->save();
        /* ingles */

        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = '
        a) Anatomy and physiology of the aura: fields, chakras, interphase, mental spheres and 
        connections: 
        Through the pages of this book you will discover that the aura and chakras are more than 
        what you know. That they are made up of cells that form tissues, organs and systems whose 
        subatomic particles vibrate at a higher frequency than those of the physical body, which is 
        why we cannot see or touch. For the BEING to have a human experience, 20 auric fields 
        are required, whose processes are coordinated by the mental spheres that are part of the 
        brain of the Soul. 
        <br><br>
        b) My energy ,,, my health. The answer for the healing of diseases: 
        Throughout this book you will find information about what the aura is like, how it works 
        and how we generate illnesses and positive as well as negative events in our lives. You will 
        learn what the language of your body is like, what it wants to say to you. Advice, 
        meditations and exercises are also given to heal and improve your life. It talks about 
        allopathic, alternative medicine and the new auric medicine that is the basis of alternative 
        or holistic medicine and how to combine them for a recovery of health. 
        <br><br>
        Photo: It is only available in spanish. 
        ';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'COURS DE MÉDECINE AURIQUE';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 6;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = "
        a) Anatomie et physiologie de l'aura: champs, chakras, interphases, sphères mentales et connexions: 

        A travers les pages de ce livre vous découvrirez que l'aura et les chakras sont plus que ce que vous savez, qu'ils sont constitués de cellules qui forment des tissus, des organes et des systèmes dont les particules subatomiques vibrent à une fréquence plus élevée que celles du corps physique, c'est pourquoi nous ne pouvons ni voir ni toucher. Pour que l'ÊTRE ait une expérience humaine, 20 champs auriques sont nécessaires, dont les processus sont coordonnés par les sphères mentales qui font partie du cerveau de l'Ame. 
        <br><br>
        b) Mon énergie ,,, ma santé. La réponse pour la guérison des maladies: 
        
        Tout au long de ce livre, vous trouverez des informations sur ce qu'est l'aura, comment elle fonctionne et comment nous générons des maladies et des événements positifs et négatifs dans nos vies. Vous apprendrez à quoi ressemble le langage de votre corps, ce qu'il veut vous dire. Des conseils, des méditations et des exercices sont également donnés pour guérir et améliorer votre vie. Il parle de médecine allopathique, alternative et de la nouvelle médecine de l'aura qui est à la base de la médecine alternative ou holistique et comment les combiner pour un rétablissement de la santé. 
        <br>
        PHOTO: Uniquement disponible en espagnol 
        
        ";
        $section_language->save();
    }
}

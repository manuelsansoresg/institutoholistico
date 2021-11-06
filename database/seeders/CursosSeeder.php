<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $findSection = SectionLanguage::where('section_id', 3);
        $findSection->delete();
        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'CURSOS DE MEDICINA AURICA';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = '
        Medicina áurica es un conocimiento que engloba anatomía, fisiología, histología, patología, parasitología, medicamentos, aparatos, instrumentos y técnicas de sanación en el aura. Es un nuevo conocimiento que viene a poner las bases de la medicina alternativa para fomentar una evolución en ella y poder trabajar de la mano con la medicina alopática. 
        <br><br>
        A lo largo de los cursos aprenderás sobre 20 campos áuricos, la interfase, conexiones, 20 chakras y esferas mentales sobre el aura. Además de medicina germánica, biodescodificación, transgeneracional, registros akashicos, ecología energética, cosmología, exopolítica, merkabas, numerología biológica, geometría sagrada y más. Por lo completo y práctico del plan de estudios, desde el primer módulo se practican terapias. 
        <br><br>
        La Escuela de Medicina Holística del Aura surgió como una necesidad de transformar a los terapeutas holísticos en médicos del aura. Al ser médico sabes cómo está estructurado el aura, como funciona, y cómo y porque perdemos la salud; además de cómo usar el conocimiento de las ramas de la medicina alternativa en conjunto para trabajar en pro de la sanación de una persona. 
        <br><br>
        La que imparte los cursos es la bióloga y terapeuta Julieta Huerta Hernández que es maestra de biología cuántica y  medicina áurica. Autora de los libros: “Anatomía y fisiología del aura” y “Mi energía… Mi salud”. Imparte cursos alrededor del mundo, llevado este revolucionario conocimiento para la transformación de la humanidad y la elevación de conciencia del planeta. 
        <br><br>
        Se puede impartir cursos de medicina áurica presenciales en tu localidad. Mayores informes ver contacto. 
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'video';
        $section_language->lang = 'es';
        $section_language->description = '&nbsp;';
        $section_language->save();
        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'AURIC MEDICINE COURSES';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = '
        Auric medicine is knowledge that encompasses the anatomy, physiology, histology, 
        pathology, parasitology, medicine, devices, instruments and healing techniques in the aura. 
        It is a new knowledge that comes to lay the foundations of alternative medicine to promote 
        an evolution in it and to be able to work hand in hand with allopathic medicine. 
        <br><br>
        Throughout the courses you will learn about 20 auric fields, the interface, connections, 
        20 chakras and mental spheres on the aura. In addition to Germanic Medicine, 
        Biodecoding, Transgenerational, Akashic Records, Energy Ecology, Cosmology, 
        Exopolitics, Merkabas, Biological Numerology, Sacred Geometry, and more. Due to the 
        completeness and practicality of the study plan, therapies are practiced from the first 
        module. 
        <br><br>
        The Holistic Aura School of Medicine emerged as a need to transform holistic 
        therapists into aura practitioners. Being an auric doctor, you will know how the aura is 
        structured, how it works, and how and why we lose our health; as well as how to use the 
        knowledge of the branches of alternative medicine together to work towards the healing of 
        a person. 
        <br><br>
        The one who teaches the courses is the biologist and therapist Julieta Huerta 
        Hernández who is a teacher of quantum biology and auric medicine. Author of the books: 
        “Anatomy and physiology of the aura” and “My energy… My health”. She teaches courses 
        around the world, taking this revolutionary knowledge for the transformation of humanity 
        and the elevation of consciousness of the planet. 
        <br><br>
        On-site auric medicine courses can be taught in your area. For more information see 
        contact. 
        ';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'video';
        $section_language->lang = 'en';
        $section_language->description = '&nbsp;';
        $section_language->save();

        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'COURS DE MÉDECINE AURIQUE';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = "
        La médecine aurique est une connaissance qui englobe l'anatomie, la physiologie, l'histologie, la pathologie, la parasitologie, les médicaments, les appareils, les instruments et les techniques de guérison dans l'aura. C'est un savoir nouveau qui vient poser les bases de la médecine alternative pour favoriser l’évolution de celle-ci et pouvoir travailler main dans la main avec la médecine allopathique. 
        <br><br>
        Tout au long des cours, vous découvrirez 20 champs auriques, l'interface, les connexions, 20 chakras et sphères mentales sur l'aura. En plus de la médecine germanique, du biodécodage, du transgénérationnel, des archives akashiques, de l'écologie énergétique, de la cosmologie, de l'exopolitique, du Merkabas, de la numérologie biologique, de la géométrie sacrée, entre autres. En raison de l'exhaustivité et de la praticité du plan d'études, les thérapies sont pratiquées dès le premier module. 
        <br><br>
        L'école de médecine Holistic Aura est apparue depuis un besoin de transformer les thérapeutes holistiques en praticiens de l'aura. En tant que médecin de l´aura, vous savez comment l'aura est structurée, comment elle fonctionne et comment et pourquoi nous perdons notre santé ; de plus à comment utiliser les connaissances des branches de la médecine alternative pour travailler à la guérison d'une personne. 
        <br><br>
        Celle qui guide les cours est la biologiste et thérapeute Julieta Huerta Hernández qui enseigne la biologie quantique et la médecine aurique. Auteur des livres : « Anatomie et physiologie de l'aura » et « Mon énergie… Ma santé ». Elle donne des cours à travers le monde, en développant cette connaissance révolutionnaire pour la transformation de l'humanité et l'élévation de la conscience de la planète. 
        <br><br>
        Des cours de médecine aurique sur place peuvent être dispensés dans votre région. Pour plus de renseignements voir section contact. 
        ";
        $section_language->save();
        $section_language = new SectionLanguage();
        $section_language->section_id = 3;
        $section_language->name = 'video';
        $section_language->lang = 'fr';
        $section_language->description = '&nbsp;';
        $section_language->save();
    }
}

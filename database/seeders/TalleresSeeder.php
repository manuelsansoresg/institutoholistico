<?php

namespace Database\Seeders;

use App\Models\SectionLanguage;
use Illuminate\Database\Seeder;

class TalleresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $findSection = SectionLanguage::where('section_id', 5);
        $findSection->delete();

        /* español */
        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'title';
        $section_language->lang = 'es';
        $section_language->description = 'TALLERES';
        $section_language->save();
        /* ingles */
        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'title';
        $section_language->lang = 'en';
        $section_language->description = 'WORKSHOPS';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'ATELIERS';
        $section_language->save();
        /* ----------- descripcion--------------- */
        /* español */

        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'description';
        $section_language->lang = 'es';
        $section_language->description = '
        a) Mi energía… Mi salud: Se da conocimiento sobre la energía, el aura y los chakras, como sentirla y percibirla, sobre bloqueos energéticos y como sanarlos. También se enseña a dar energía de diferentes frecuencias para sanar una zona del cuerpo. Es teórico, práctico y terapia.  
        <br><br>
        b) Yo en mi mismo, en la familia y en la sociedad: Se ve la personalidad, los mecanismos de defensa que adoptamos para enfrentar la vida, como vivir desde el observador para sanar y armonizar nuestra vida, el impacto de la familia y la sociedad en la programación de nuestra vida, la dualidad, el holograma de la realidad, transgeneracional y más. Teoría, prácticas y terapia. 
        <br><br>
        c) Meditación: Se enseña los diferentes tipos de meditación que hay y cuando se usa cada una. Además se da herramientas para mejorar tu práctica de meditación. Se practican cada uno de los tipos de meditación. Taller teórico y práctico. 
        <br><br>
        d) Relaciones interpersonales/conexiones energéticas: ¿cómo mejorarlas y sanarlas?: A través de este taller conocerás los aspectos tóxicos de la personalidad y como daña a uno mismo y a los demás. Conocerás como manejar las situaciones en las relaciones no sanas. Se te dará herramientas para armonizar aspectos desequilibrados de tu ser. Hay teoría, prácticas y terapia. 
        <br><br>
        e) Los cuentos que me cuento: Aprenderás el mecanismo de la mente para crear la realidad y guardar los sucesos de la vida. Aprenderás sobre el ego y cómo manejarlo. Veras que programas tienes en tu inconsciente que te limitan o te bloquean tus proyectos en tu vida. Trabajaras con tu sombra para sacarla, liberarla y sanarla. Es teórico, práctico y hay terapia. 
        <br><br>
        f) Yo Hombre, Yo Mujer: A través de este taller aprenderás como son las mujeres y los hombres desde el punto de vista emocional, mental y  del alma; así como mejorar la relación con uno mismo y con tu pareja. Se te darán las herramientas para mejorar tu relación de pareja. Atrévete a volver al amor y al romance. Es un taller teórico, práctico y con terapia. 
        ';
        $section_language->save();
        /* ingles */

        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'description';
        $section_language->lang = 'en';
        $section_language->description = '
        a) My energy… My health: Knowledge is given about energy, the aura and the chakras, 
        how to feel and perceive them, about energy blocks and how to heal them. It is also taught 
        to give energy of different frequencies to heal an area of the body. There is theoretical, 
        practical and therapy. 
        
        <br> <br> 
        b) I in myself, in the family and in the society: You see the personality, the defense 
        mechanisms that we adopt to face life, how to live from the observer to heal and harmonize 
        our life, the impact of the family and the society in the programming of our life, duality, the 
        hologram of reality, transgenerational and more. There is theory, practice and therapy. 
        
        c) Meditation: The different types of meditation that exist are taught and when each one is 
        used. In addition, tools are given to improve your meditation practice. Each of the types of 
        meditation are practiced. There is a theoretical and practical workshop. 
        <br> <br> 
        
        d) Interpersonal relationships / energy connections: how to improve and heal them: 
        Through this workshop you will learn about the toxic aspects of personality and how it 
        damages oneself and others. You will know how to handle situations in unhealthy 
        relationships. You will be given tools to harmonize unbalanced aspects of your being. There 
        is theory, practice and therapy. 
        <br> <br> 
        
        e) The stories that I tell myself: You will learn the mechanism of the mind to create reality 
        and save life events. You will learn about the ego and how to handle it. You will see what 
        programs you have in your unconscious mind that limit or block your projects in your life. 
        You will work with your shadow to pull it out, release it, and heal it. It is theoretical, 
        practical and there is therapy. 
        
        <br> <br> 
        f) I Man, I Woman: Through this workshop you will learn how women and men are from 
        the emotional, mental and soul point of view; as well as improving the relationship with 
        oneself and with your partner. You will be given the tools to improve your relationship with 
        your partner. Dare to return to love and romance. It is a theoretical, practical and therapy 
        workshop. 
        ';
        $section_language->save();
        /* frances */
        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'title';
        $section_language->lang = 'fr';
        $section_language->description = 'COURS DE MÉDECINE AURIQUE';
        $section_language->save();

        $section_language = new SectionLanguage();
        $section_language->section_id = 5;
        $section_language->name = 'description';
        $section_language->lang = 'fr';
        $section_language->description = "
        a) Mon énergie… Ma santé: Ici on traite des connaissances sur l'énergie, l'aura et les chakras, comment la ressentir et la percevoir. Egalement sur les blocages énergétiques et comment les soigner. Un des exercices également enseigné est de donner de l'énergie de différentes fréquences pour soigner une zone du corps. Il est théorique, pratique et thérapeutique. 
        <br><br>
        b) Moi en moi-même, dans la famille et dans la société : Vous voyez la personnalité, les mécanismes de défense que nous adoptons pour faire face à la vie, comment vivre de l'observateur pour guérir et harmoniser notre vie, l'impact de la famille et de la société dans la programmation de notre vie, la dualité, l'hologramme de la réalité, transgénérationnelle et plus encore. Théorie, pratiques et thérapie. 
        <br><br>
        c) Méditation: Ce qui est enseigné ici ce sont les différents types de méditation qui existent et quand cela doit être utilisé. De plus, des outils sont donnés pour améliorer votre pratique de la méditation. Chaque type de méditation est pratiqué. Atelier théorique et pratique. 
        <br><br>
        d) Relations interpersonnelles / connexions énergétiques : comment les améliorer et les soigner ? Vous saurez comment gérer les situations dans les relations malsaines. Vous recevrez des outils pour harmoniser les aspects déséquilibrés de votre être. Atelier théorie, la pratique et la thérapie. 
        <br><br>
        e) Les histoires que je me raconte: Vous apprendrez le mécanisme de l'esprit pour créer la réalité et sauver les événements de la vie. Vous en apprendrez davantage sur l'ego et comment le gérer. Vous verrez quels programmes vous avez dans votre inconscient qui limitent ou bloquent vos projets dans votre vie. Vous travaillerez avec votre ombre pour la retirer, la libérer et la soigner. C'est théorique, pratique et il y a une thérapie incluse. 
        <br><br>
        f) Moi homme, Moi femme: Grâce à cet atelier, vous apprendrez comment sont les femmes et les hommes du point de vue émotionnel, mental et de l'âme ; ainsi que l'amélioration de la relation avec soi-même et avec votre partenaire. Vous recevrez les outils pour améliorer votre relation avec votre partenaire. Osez revenir à l'amour et à la romance. Il s'agit d'un atelier théorique, pratique et thérapeutique. 
        ";
        $section_language->save();
    }
}

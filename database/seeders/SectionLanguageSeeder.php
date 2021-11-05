<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = ['cabecera', 'slider', 'cursos', 'terapias', 'talleres', 'libros', 'contacto'];

        foreach ($sections as $section) {
            $a_section = new Section();
            $a_section->name = $section;
            $a_section->save();
        }
    }
}

<?php

use App\Models\ImagesSection;
use App\Models\SectionLanguage;
use Illuminate\Support\Facades\DB;

function get_section($section, $name, $type = null,  $result = 0)
{
    DB::enableQueryLog();

    $lang = (session('lang') == null) ? 'es' : session('lang');
    $section_language = SectionLanguage::where('lang', $lang)->where('section_id', $section);
    if ($name != '') {
        $section_language = $section_language->where('name', $name);
    }
    if ($type != null) {
        $section_language = $section_language->where('type', $type);
    }


    if ($result == 0) {
        $section_language = $section_language->first();
    } else {
        $section_language = $section_language->get();
    }

    return $section_language;
}

function get_images($section_id, $is_movil = false, $result = 0, $alias = false)
{
    $images = ImagesSection::where('section_id', $section_id);

    if ($is_movil) {
        $images = $images->where('is_movil', 1);
    }

    if ($alias != false) { //se usa para obtener las imagenes en equipo
        $images = $images->where('alias', $alias);
    }

    if ($result == 0) {
        $images = $images->first();
    } else {
        $images = $images->get();
    }

    return $images;
}

function get_youtube_id_from_url($url)
{
    $result = '';

    if ($url !== '&nbsp;') {
        preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);
        return $results[6];
    }
}

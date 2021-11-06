<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagesSection;
use App\Models\SectionLanguage;
use Illuminate\Http\Request;

class CarruselController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/carrusel';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllCarrusel();
        return view('admin.carrusel.index', compact('es_sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        $es_sections    = SectionLanguage::where('lang', $lang)->where('section_id', 2)->get();
        $images         = $this->getImages($lang);
        $section_id     = 1;
        $set_lang       = $lang;

        return view('admin.carrusel.edit', array('images' => $images, 'es_sections' => $es_sections, 'section_id' => $section_id, 'set_lang' => $set_lang));
    }

    public function images($set_lang, Request  $request)
    {
        $images = ImagesSection::where('section_id', 2)
            ->where('alias', $set_lang)
            ->get();

        if ($_POST) {
            if ($request->hasFile('imagen') != false) {
                $imagen = SectionLanguage::upload($request, 'imagen', $this->path_image);
                $new_image = new ImagesSection();
                $new_image->section_id = 2;
                $new_image->alias = $set_lang;
                $new_image->image = $imagen;
                $new_image->save();
            }
            return redirect('/admin/carrusel/images/' . $set_lang);
        }

        return view('admin.carrusel.images', compact('images', 'set_lang'));
    }

    public function getImages($lang)
    {
        $images = array();
        for ($i = 1; $i <= 7; $i++) {
            $image = ImagesSection::where('section_id', 2)->where('alias', $lang . '-' . $i)->first();
            if ($image !== null) {
                $images[$lang . '-' . +$i] = $image;
            }
        }
        return $images;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sections = SectionLanguage::editCarrusel($request, $this->path_image);
        if ($sections) {
            flash('Elemento editado');
            return redirect('admin/carrusel');
        }
    }

    public function destroyImage($id, $lang)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('/admin/carrusel/images/' . $lang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

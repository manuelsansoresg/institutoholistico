<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagesSection;
use App\Models\SectionLanguage;
use Illuminate\Http\Request;

class TerapiasController extends Controller
{
    protected $path_image;

    public function __construct()
    {
        $this->path_image = 'img/terapias';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $es_sections = SectionLanguage::getAllTerapia();
        return view('admin.terapias.index', compact('es_sections'));
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
        $es_sections = SectionLanguage::where('lang', $lang)->where('section_id', 4)->get();
        $image = get_images(4, false, 0, '1-' . $lang);
        $image2 = get_images(4, false, 0, '2-' . $lang);
        $image_thumb = ImagesSection::where('section_id', 4)->where('is_movil', 1)->first();
        $section_id = 1;
        $set_lang = $lang;
        return view('admin.terapias.edit', compact('es_sections', 'image', 'image2', 'section_id', 'set_lang', 'image_thumb'));
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
        $sections = SectionLanguage::editTerapia($request, $this->path_image);
        if ($sections) {
            flash('Elemento editado');
            return redirect('admin/terapias');
        }
    }

    public function destroyImage($id, $lang)
    {
        ImagesSection::drop($this->path_image, $id);
        flash('Elemento borrado');
        return redirect('/admin/terapias/' . $lang . '/edit');
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

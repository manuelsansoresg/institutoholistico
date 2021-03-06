<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Verot\Upload\Upload;

class SectionLanguage extends Model
{
    use HasFactory;
    protected $fillable = ['section_id', 'description'];

    public static function getCabecera($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 1)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();
        $description = SectionLanguage::where('section_id', 1)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();
        $description = ($description !== null) ? $description : null;
        return array('id' => $title->id, 'section_id' => $title->section_id,  'lang' => $title->lang,  'title' => $title->description, 'description' => $description);
    }

    public static function getAllCabecera()
    {
        $data = array();
        $es = self::getCabecera('es');
        $en = self::getCabecera('en');
        $fr = self::getCabecera('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editCabecera($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 1)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 1)
            ->update(['description' => $request->descripcion]);



        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $new_image = new ImagesSection();
            $new_image->section_id = 1;
            $new_image->image = $imagen;
            $new_image->save();
        }

        if ($request->hasFile('imagen_movil') != false) {
            $imagen_movil = self::upload($request, 'imagen_movil', $path, true);


            $new_image = new ImagesSection();
            $new_image->section_id = 1;
            $new_image->image = $imagen_movil;
            $new_image->is_movil = 1;
            $new_image->save();
        }
        return true;
    }

    public static function getCarrusel($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 2)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();
        $description = SectionLanguage::where('section_id', 2)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();
        $description = ($description !== null) ? $description : null;
        return array('id' => $title->id, 'section_id' => $title->section_id,  'lang' => $title->lang,  'title' => $title->description, 'description' => $description);
    }

    public static function getAllCarrusel()
    {
        $data = array();
        $es = self::getCarrusel('es');
        $en = self::getCarrusel('en');
        $fr = self::getCarrusel('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editCarrusel($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 2)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 2)
            ->update(['description' => $request->descripcion]);





        return true;
    }

    public static function getCurso($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 3)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();

        $description = SectionLanguage::where('section_id', 3)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();

        $video = SectionLanguage::where('section_id', 3)
            ->where('lang', $lang)
            ->where('name', 'video')
            ->first();
        $description = ($description === null) ? null : $description;

        return array('id' => $title->id, 'section_id' => $title->section_id, 'video' => $video, 'lang' => $title->lang,  'title' => $title->description, 'description' => $description->description);
    }

    public static function getAllCurso()
    {
        $data = array();
        $es   = self::getCurso('es');
        $en   = self::getCurso('en');
        $fr   = self::getCurso('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editCurso($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 3)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 3)
            ->update(['description' => $request->descripcion]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'video')->where('section_id', 3)
            ->update(['description' => $request->video]);

        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);

            $new_image = new ImagesSection();
            $new_image->section_id = 3;
            $new_image->image = $imagen;
            $new_image->alias = $request->lang;
            $new_image->save();
        }



        return true;
    }

    public static function getTerapia($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();
        $description = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();

        return array('id' => $title->id, 'section_id' => $title->section_id,  'lang' => $title->lang,  'title' => $title->description, 'description' => $description->description);
    }

    public static function getAllTerapia()
    {
        $data = array();
        $es = self::getTerapia('es');
        $en = self::getTerapia('en');
        $fr = self::getTerapia('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editTerapia($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 4)
            ->update(['description' => $request->title]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 4)
            ->update(['description' => $request->descripcion]);

        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $new_image = new ImagesSection();
            $new_image->section_id = 4;
            $new_image->image = $imagen;
            $new_image->alias = '1-' . $request->lang;
            $new_image->save();
        }



        if ($request->hasFile('imagen2') != false) {
            $imagen2 = self::upload($request, 'imagen2', $path, true);


            $new_image = new ImagesSection();
            $new_image->section_id = 4;
            $new_image->image = $imagen2;
            $new_image->alias = '2-' . $request->lang;
            $new_image->save();
        }
        return true;
    }

    public static function getTaller($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 5)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();
        $description = SectionLanguage::where('section_id', 5)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();

        return array('id' => $title->id, 'section_id' => $title->section_id,  'lang' => $title->lang,  'title' => $title->description, 'description' => $description->description);
    }

    public static function getAllTaller()
    {
        $data = array();
        $es = self::getTaller('es');
        $en = self::getTaller('en');
        $fr = self::getTaller('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editTaller($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 5)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 5)
            ->update(['description' => $request->descripcion]);

        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $new_image = new ImagesSection();
            $new_image->section_id = 5;
            $new_image->image = $imagen;
            $new_image->alias = $request->lang;
            $new_image->save();
        }


        return true;
    }

    public static function getLibro($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 6)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();

        $titlelibro1 = SectionLanguage::where('section_id', 6)
            ->where('lang', $lang)
            ->where('name', 'titlelibro1')
            ->first();
        $description1 = SectionLanguage::where('section_id', 6)
            ->where('lang', $lang)
            ->where('name', 'description1')
            ->first();
        $titlelibro2 = SectionLanguage::where('section_id', 6)
            ->where('lang', $lang)
            ->where('name', 'titlelibro2')
            ->first();
        $description2 = SectionLanguage::where('section_id', 6)
            ->where('lang', $lang)
            ->where('name', 'description2')
            ->first();

        return array('id' => $title->id, 'titlelibro1' => $titlelibro1, 'titlelibro2' => $titlelibro2, 'description2' => $description2,  'section_id' => $title->section_id,  'lang' => $title->lang,  'title' => $title->description, 'description1' => $description1->description);
    }

    public static function getAllLibro()
    {
        $data = array();
        $es = self::getLibro('es');
        $en = self::getLibro('en');
        $fr = self::getLibro('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editLibro($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 6)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'titlelibro1')->where('section_id', 6)
            ->update(['description' => $request->titlelibro1]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'description1')->where('section_id', 6)
            ->update(['description' => $request->description1]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'titlelibro2')->where('section_id', 6)
            ->update(['description' => $request->titlelibro2]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'description2')->where('section_id', 6)
            ->update(['description' => $request->description2]);

        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $new_image = new ImagesSection();
            $new_image->section_id = 6;
            $new_image->image = $imagen;
            $new_image->alias = '1-' . $request->lang;
            $new_image->save();
        }



        if ($request->hasFile('imagen2') != false) {
            $imagen2 = self::upload($request, 'imagen2', $path, true);

            $new_image = new ImagesSection();
            $new_image->section_id = 6;
            $new_image->image = $imagen2;
            $new_image->alias = '2-' . $request->lang;
            $new_image->save();
        }


        return true;
    }

    public static function getContacto($lang)
    {
        $data = array();
        $title = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();
        $description = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();

        $celular_contact = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'celular_contact')
            ->first();

        $email_contact = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'email_contact')
            ->first();

        return array('id' => $title->id, 'section_id' => $title->section_id, 'email_contact'  => $email_contact->description, 'celular_contact' => $celular_contact->description, 'description' => $description->description,  'lang' => $title->lang,  'title' => $title->description);
    }

    public static function getAllContacto()
    {
        $data = array();
        $es = self::getContacto('es');
        $en = self::getContacto('en');
        $fr = self::getContacto('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editContacto($request, $path)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 7)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 7)
            ->update(['description' => $request->descripcion]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'email_contact')->where('section_id', 7)
            ->update(['description' => $request->email_contact]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'celular_contact')->where('section_id', 7)
            ->update(['description' => $request->celular_contact]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'youtube_contact')->where('section_id', 7)
            ->update(['description' => $request->youtube_contact]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'pages_facebook_contact')->where('section_id', 7)
            ->update(['description' => $request->pages_facebook_contact]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'name')->where('section_id', 7)
            ->update(['description' => $request->name]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'city')->where('section_id', 7)
            ->update(['description' => $request->city]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'country')->where('section_id', 7)
            ->update(['description' => $request->country]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'telephone')->where('section_id', 7)
            ->update(['description' => $request->telephone]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'email')->where('section_id', 7)
            ->update(['description' => $request->email]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'comment')->where('section_id', 7)
            ->update(['description' => $request->comment]);

        return true;
    }

    /* Criteria list*/
    public static function createCriteriaList($request)
    {

        $list = new SectionLanguage();
        $list->section_id = 2;
        $list->name = $request->titulo;
        $list->lang = $request->lang;
        $list->type = 'ul';
        $list->description = $request->descripcion;
        $list->save();
    }

    public static function editLists($request, $id, $path)
    {

        $list = SectionLanguage::find($id);
        $list->name = $request->titulo;
        $list->lang = $request->lang;
        $list->description = $request->descripcion;
        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $list->image = $imagen;
        }
        $list->update();
    }

    static function dropImage($path, $id)
    {
        $image = SectionLanguage::find($id);
        @unlink('./' . $path . '/' . $image->image);
        @unlink('./' . $path . '/' . 'thumb_' . $image->image);
        $image->image = '';
        $image->update();
    }



    public static function dropCriteriaList($id, $path)
    {
        $list = SectionLanguage::find($id);
        @unlink('./' . $path . '/' . $list->image);
        @unlink('./' . $path . '/' . 'thumb_' . $list->image);

        $list->delete();
    }
    /* Criteria list*/

    /* team*/

    public static function getTeam($lang)
    {

        $lbl_title = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_lbltitle')
            ->first();

        $person_title1 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_title1')
            ->first();

        $person_position1 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_position1')
            ->first();

        $person_description1 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_description1')
            ->first();

        $person_title2 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_title2')
            ->first();

        $person_position2 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_position2')
            ->first();

        $person_description2 = SectionLanguage::where('section_id', 4)
            ->where('lang', $lang)
            ->where('name', 'person_position2')
            ->first();

        $data = array(
            'id' => $lbl_title->id, 'section_id' => $lbl_title->section_id,  'lang' => $lbl_title->lang,  'title' => $lbl_title->description,
            'person_name1' => $person_title1->description,
            'person_position1' => $person_position1->description,
            'person_description1' => $person_description1->description,
            'person_name2' => $person_title2->description,
            'person_description2' => $person_description2->description,
        );
        return $data;
    }

    public static function getAllTeam()
    {
        $data = array();
        $es = self::getTeam('es');
        $en = self::getTeam('en');
        $fr = self::getTeam('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }


    public static function editTeam($request, $path)
    {

        SectionLanguage::where('lang', $request->lang)->where('name', 'person_lbltitle')->where('section_id', 4)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'person_title1')->where('section_id', 4)
            ->update(['description' => $request->nombre]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'person_position1')->where('section_id', 4)
            ->update(['description' => $request->puesto]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'person_description1')->where('section_id', 4)
            ->update(['description' => $request->descripcion]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'person_title2')->where('section_id', 4)
            ->update(['description' => $request->nombre2]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'person_position2')->where('section_id', 4)
            ->update(['description' => $request->puesto2]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'person_description2')->where('section_id', 4)
            ->update(['description' => $request->descripcion2]);

        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $new_image = new ImagesSection();
            $new_image->section_id = 4;
            $new_image->image = $imagen;
            $new_image->alias = '1';
            $new_image->save();
        }

        if ($request->hasFile('imagen2') != false) {
            $imagen = self::upload($request, 'imagen2', $path, false, '2');
            $new_image = new ImagesSection();
            $new_image->section_id = 4;
            $new_image->image = $imagen;
            $new_image->alias = '2';
            $new_image->save();
        }
    }
    /* team*/

    /* transaction */
    public static function getTransaction($lang)
    {
        $lbl_title = SectionLanguage::where('section_id', 5)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();

        $description = SectionLanguage::where('section_id', 5)
            ->where('lang', $lang)
            ->where('name', 'description')
            ->first();

        $data = array(
            'id' => $lbl_title->id, 'section_id' => $lbl_title->section_id,  'lang' => $lbl_title->lang,  'title' => $lbl_title->description,
            'description' => $description->description,

        );

        return $data;
    }

    public static function getAllTransaction()
    {
        $data = array();
        $es = self::getTransaction('es');
        $en = self::getTransaction('en');
        $fr = self::getTransaction('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editTransaction($request)
    {
        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 5)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'description')->where('section_id', 5)
            ->update(['description' => $request->descripcion]);
    }

    /* transaction */

    /* transaction list */
    public static function createTransactionList($request, $path)
    {
        $list = new SectionLanguage();
        $list->section_id = 5;
        $list->name = $request->titulo;
        $list->lang = $request->lang;
        $list->type = 'ul';
        $list->description = $request->descripcion;


        if ($request->hasFile('imagen') != false) {
            $imagen = self::upload($request, 'imagen', $path);
            $list->image = $imagen;
        }
        $list->save();
    }
    /* transaction list */

    /* contacto*/
    public static function getContact($lang)
    {
        $lbl_title = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'title')
            ->first();

        $name = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'name')
            ->first();

        $email = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'email')
            ->first();

        $phone = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'phone')
            ->first();

        $message = SectionLanguage::where('section_id', 7)
            ->where('lang', $lang)
            ->where('name', 'message')
            ->first();

        $data = array(
            'id' => $lbl_title->id, 'section_id' => $lbl_title->section_id,  'lang' => $lbl_title->lang,  'title' => $lbl_title->description,
            'name' => $name->description,  'email' => $email->description,  'phone' => $phone->description, 'message' => $message->description
        );

        return $data;
    }

    public static function getAllContact()
    {
        $data = array();
        $es = self::getContact('es');
        $en = self::getContact('en');
        $fr = self::getContact('fr');

        $data[] = ($es);
        $data[] = ($en);
        $data[] = ($fr);
        return $data;
    }

    public static function editContact($request, $path)
    {

        SectionLanguage::where('lang', $request->lang)->where('name', 'title')->where('section_id', 7)
            ->update(['description' => $request->titulo]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'name')->where('section_id', 7)
            ->update(['description' => $request->nombre_formulario]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'email')->where('section_id', 7)
            ->update(['description' => $request->email_formulario]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'phone')->where('section_id', 7)
            ->update(['description' => $request->telefono_formulario]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'message')->where('section_id', 7)
            ->update(['description' => $request->mensaje_formulario]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'txt_address')->where('section_id', 7)
            ->update(['description' => $request->direccion]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'val_address')->where('section_id', 7)
            ->update(['description' => $request->contenido_direccion]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'txt_phone')->where('section_id', 7)
            ->update(['description' => $request->telefono]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'val_phone')->where('section_id', 7)
            ->update(['description' => $request->contenido_telefono]);

        SectionLanguage::where('lang', $request->lang)->where('name', 'txt_email')->where('section_id', 7)
            ->update(['description' => $request->email]);
        SectionLanguage::where('lang', $request->lang)->where('name', 'val_email')->where('section_id', 7)
            ->update(['description' => $request->contenido_email]);
        return true;
    }
    /* contacto*/

    public static function upload($request, $name, $path, $ismovil = false, $pre = '')
    {
        $image_cover = $request->file($name);
        $pre_movil = ($ismovil == true) ? 'movil_' : '';

        $extension = $image_cover->getClientOriginalExtension();
        $name_full = $pre . $pre_movil . time() . '.' . $extension;
        $name_thumb =  $pre . $pre_movil . time();
        $thumb = new Upload($_FILES[$name]);


        if ($thumb->uploaded) {
            $thumb->file_new_name_body   = $name_thumb;
            $thumb->file_name_body_pre    = 'thumb_';
            $thumb->file_safe_name     =    true;
            $thumb->image_resize         = true;
            $thumb->image_ratio_crop     = true;
            $thumb->image_x              = 150;
            $thumb->image_y              = 150;
            $thumb->process($path . '/');
        }


        $image_cover->move($path, $name_full);


        return  $name_full;
    }

    public function imagesSection()
    {
        return $this->hasMany(ImagesSection::class, 'section_id');
    }
}

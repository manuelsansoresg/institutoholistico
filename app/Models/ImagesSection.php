<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesSection extends Model
{
    use HasFactory;
    protected $table = 'images_section';

    public static function drop($path, $id)
    {
        $image_about = ImagesSection::find($id);
        @unlink('./' . $path . '/' . $image_about->image);
        @unlink('./' . $path . '/' . 'thumb_' . $image_about->image);

        $image_about->delete();
    }

    public function sectionLanguage()
    {
        return $this->belongsTo(SectionLanguage::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfGallery extends Model
{
    protected $table = 'pdf_gallery';


    protected $fillable = ['title','image'];
}

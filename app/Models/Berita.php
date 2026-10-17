<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Berita extends Model
{
    private static $data_berita = [
        [
            "Judul" => "Mahasiswa TI",
            "slug" => "mahasiswa-ti",
            "Penulis" => "Admin",
            "Konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Excepturi, alias laboriosam reprehenderit animi nostrum, 
                            porro soluta commodi quod non consectetur eligendi nam corporis 
                            cupiditate reiciendis vel dolores dolorem magni quas."
        ],
        [
            "Judul" => "Teknologi",
            "slug" => "syifa-tekno",
            "Penulis" => "syifa",
            "Konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Excepturi, alias laboriosam reprehenderit animi nostrum, 
                            porro soluta commodi quod non consectetur eligendi nam corporis 
                            cupiditate reiciendis vel dolores dolorem magni quas."
        ],
    ];
    

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        $Beritas = self::$data_berita;
        foreach($Beritas as $b){
            if($b["slug"] == $slug){
            
                $berita = $b;
            }

        
    }
     return $berita;
    }
    public static function getTitle($slug)
    {
        $berita = self::getberita($slug);
        return $berita["Judul"];
        
    }

}

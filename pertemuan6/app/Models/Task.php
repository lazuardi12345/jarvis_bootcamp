<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
   
    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 1 Matematika Kompuer',
            'description' => 'Merangkum Materi Pertemuan 3',
            'deadline' => '2023-07-25',
            'status' => 'selesai'
        ],
        [
            'id' => 2,
            'name' => 'Tugas 2 Matematika Komputer',
            'description' => 'Mengitung probabilitas pada data yang diberikan',
            'deadline' => '2023-08-29',
            'status' => 'selesai'
        ],
        [
            'id' => 3,
            'name' => 'Tugas 3 Matematika Komputer',
            'description' => 'Mengitung uang anda sendiri',
            'deadline' => '2023-09-29',
            'status' => 'belum selesai'
        ],
    ];

    public static function getAll()
    {
        return self::$tasks;
    }

    public static function getId($id){
        foreach(self::$tasks as $item){
            if($item['id'] == $id){
                return $item;
            }
        }
    }
}

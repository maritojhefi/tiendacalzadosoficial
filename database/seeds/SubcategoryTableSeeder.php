<?php

use App\Subcategoria;
use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoria::truncate();
       
    Subcategoria::create([
        'nombre'=>"Para hombre",
        'detalle'=>"Solo para varones",
       
    ]);
    Subcategoria::create([
        'nombre'=>"Para mujer",
        'detalle'=>"Solo damas",
       
    ]);
   
  
    Subcategoria::create([
        'nombre'=>"Para ninos",
        'detalle'=>"Solo para ninos",
       
    ]);
    
    }
}

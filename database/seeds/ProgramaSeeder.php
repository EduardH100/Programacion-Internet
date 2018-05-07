<?php

use App\Programa;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Primer forma
        Programa::create([
          'programa' => 'Desarrollo Software',
          'dependencia' => 'CTA'
        ]);
          
        //Segunda forma (Query builder)
         DB::table('programas')->insert([
           'programa' => 'Asistente oficina',
           'dependencia' => 'Rectoria'
         ]);
      
        DB::table('programas')->insert([
           'programa' => 'Asistencia Legal',
           'dependencia' => 'Sec. Administrativa'
         ]); 
    }
}

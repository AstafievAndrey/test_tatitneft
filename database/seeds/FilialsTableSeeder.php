<?php

use Illuminate\Database\Seeder;

class FilialsTableSeeder extends Seeder
{
    protected $data = [
            ['id'=>1, 'number'=>5,'name'=>'Азнакаево'],
            ['id'=>2, 'number'=>2,'name'=>'Лениногорск'],
            ['id'=>3, 'number'=>0,'name'=>'Альметьевск'],
        ];
    public function run()
    {
        foreach ($this->data as $value){
            DB::table('filials')->insert([
                'id' => $value['id'],
                'number' => $value['number'],
                'name' => $value['name'],
                'created_at' => date('Y-m-d h:m:s'),
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class ProstoisTableSeeder extends Seeder
{
    protected $data = [
            ['id'=>1, 'bankomat_id'=>1,'begin'=>'2012-02-12 09:14:01','end'=>'2012-02-15 10:00:01'],
            ['id'=>2, 'bankomat_id'=>2,'begin'=>'2012-02-15 10:00:01','end'=>'2012-02-15 12:20:51'],
            ['id'=>3, 'bankomat_id'=>3,'begin'=>'2012-02-09 06:28:17','end'=>'2012-02-15 10:00:01'],
        ];
    public function run()
    {
        foreach ($this->data as $value){
            DB::table('prostois')->insert([
                'id' => $value['id'],
                'bankomat_id' => $value['bankomat_id'],
                'begin' => $value['begin'],
                'end' => $value['end'],
                'created_at' => date('Y-m-d h:m:s'),
            ]);
        }
    }
}

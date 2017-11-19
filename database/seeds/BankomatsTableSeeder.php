<?php

use Illuminate\Database\Seeder;

class BankomatsTableSeeder extends Seeder
{
    protected $data = [
            ['id'=>1, 'number'=>150,'address'=>'Вахитово 7','filial_id'=>1],
            ['id'=>2, 'number'=>215,'address'=>'Гагарина 10','filial_id'=>2],
            ['id'=>3, 'number'=>360,'address'=>'Муслимово 18','filial_id'=>3],
        ];
    public function run()
    {
        foreach ($this->data as $value){
            DB::table('bankomats')->insert([
                'id' => $value['id'],
                'number' => $value['number'],
                'address' => $value['address'],
                'filial_id' => $value['filial_id'],
                'created_at' => date('Y-m-d h:m:s'),
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'name'=>'青岛容商天下网络有限公司',
            'keyword'=>'keyword',
            'description'=>'description',
            'copyright'=>'copyright',
            'phone'=>'400-000-8888',
            'address'=>'青岛市即墨区创智新区企业总部D楼',
        ]);
    }
}

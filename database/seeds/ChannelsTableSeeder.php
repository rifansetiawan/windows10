<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Larave 7.0',
            'slug' => Str::slug('Larave 7.0')
        ]);

        Channel::create([
            'name' => 'VUE JS 3',
            'slug' => Str::slug('VUE JS 3')
        ]);

        Channel::create([
            'name' => 'Angular 7',
            'slug' => Str::slug('Angular 7')
        ]);

        Channel::create([
            'name' => 'Node JS',
            'slug' => Str::slug('Node JS')
        ]);
    }
}

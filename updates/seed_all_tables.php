<?php namespace Fes\Notice\Updates;

use Carbon\Carbon;
use Fes\Notice\Models\Record;
use Fes\Notice\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {

        Category::create([
            'name' => 'Overige informatie',
            'slug' => 'overige-informatie'
        ]);

        Category::create([
            'name' => 'Loopbokaal',
            'slug' => 'loopbokaal'
        ]);

        Category::create([
            'name' => 'Organisatie',
            'slug' => 'organisatie'
        ]);

        Category::create([
            'name' => 'Lid worden en opzeggen',
            'slug' => 'lid-worden-en-opzeggen'
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class School extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'Higher Technial Teacher Training College',
            'abbr' => 'H.T.T.T.C',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Higher Teacher Training College',
            'abbr' => 'H.T.T.C',
            'description' => 'It train secondary teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Higher Institute of Commerce and Manegement',
            'abbr' => 'H.I.C.M',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'College of Technology',
            'abbr' => 'COLTECH',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Higher Institute of Transport and Logistic',
            'abbr' => 'H.I.T.L',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Health Sciences',
            'abbr' => 'F.H.S',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Science',
            'abbr' => 'F.S',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Arts',
            'abbr' => 'F.A',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'National Polytech Bamenda',
            'abbr' => 'NPB',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Law and Political Science',
            'abbr' => 'F.L.P.S',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Education',
            'abbr' => 'F.E',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);
        DB::table('schools')->insert([
            'name' => 'Faculty of Economics and Management Science',
            'abbr' => 'F.E.M.S',
            'description' => 'It train secondary technical teatchers',
            'url' => '',
        ]);

    }
}

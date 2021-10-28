<?php

use Illuminate\Database\Seeder;
use App\Topics;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Topics::create([
            'topic_name' => 'C',
            'topic_description' => 'Membahas C',
            
        ]);

        Topics::create([
            'topic_name' => 'C++',
            'topic_description' => 'Membahas C++',
        ]);
        Topics::create([
            'topic_name' => 'Python',
            'topic_description' => 'Membahas Python',
        ]);
        Topics::create([
            'topic_name' => 'HTML',
            'topic_description' => 'Membahas HTML',
        ]);
        Topics::create([
            'topic_name' => 'Pemrograman PHP',
            'topic_description' => 'Membahas PHP',
        ]);
        Topics::create([
            'topic_name' => 'Pemrograman Javascript',
            'topic_description' => 'Membahas Javascript',
        ]);
        Topics::create([
            'topic_name' => 'Pemrograman Laravel',
            'topic_description' => 'Membahas Laravel',
        ]);
        Topics::create([
            'topic_name' => 'Pemrograman Codeigniter',
            'topic_description' => 'Membahas Codeigniter',
        ]);
        Topics::create([
            'topic_name' => 'Pemrograman AJAX',
            'topic_description' => 'Membahas AJAX',
        ]);
        
        // DB::statement('update topic set topic_slug = replace(topic_name, '-',' ' )');
        // DB::update('UPDATE topics SET topic_slug = ',[REPLACE(topic_name, ' ','-')]);
        Topics::where('topic_id','>',0)->update(['topic_slug' => DB::raw(" REPLACE(topic_name, ' ','-') " ) ]);
        // Topics::where()
        
        
        
    }
}

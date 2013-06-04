<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();

        $posts = array(
                array('titulo' => 'Postagem 1', 'resenha' => 'LALALLAlla ALL AL ALLALA',
                    'slug' => 'postagem-1', 'created_at' => new DateTime, 'updated_at' => new DateTime),
                array('titulo' => 'Postagem Dois', 'resenha' => 'Ble bELB BEL BLu',
                    'slug' => 'postagem-dois', 'created_at' => new DateTime,'updated_at' => new DateTime),
        );

        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}

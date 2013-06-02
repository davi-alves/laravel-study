<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();

        $posts = array(
                array('titulo' => 'Postagem 1', 'resenha' => 'LALALLAlla ALL AL ALLALA '),
                array('titulo' => 'Postagem Dois', 'resenha' => 'Ble bELB BEL BLu'),
        );

        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}

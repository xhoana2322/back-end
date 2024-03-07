<?php

use Illuminate\Support\Facades\Route;

Route::get('/elenco-attivita', function () {

    $post1 = new stdClass();
    $post1->userID = 1;
    $post1->id = 1;
    $post1->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post1->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post2 = new stdClass();
    $post2->userID = 2;
    $post2->id = 2;
    $post2->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post2->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post3 = new stdClass();
    $post3->userID = 3;
    $post3->id = 3;
    $post3->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post3->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post4 = new stdClass();
    $post4->userID = 4;
    $post4->id = 4;
    $post4->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post4->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    return view('elenco-attivita', ['posts' => [$post1, $post2, $post3, $post4]]);
})
    ->whereAlpha(['title', 'body'])
    ->whereNumber(['userId', 'id']);


//  --------------------------------------------------------------------- //


Route::get('/creazione', function () {

    $post1 = new stdClass();
    $post1->userID = 1;
    $post1->id = 1;
    $post1->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post1->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post2 = new stdClass();
    $post2->userID = 2;
    $post2->id = 2;
    $post2->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post2->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post3 = new stdClass();
    $post3->userID = 3;
    $post3->id = 3;
    $post3->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post3->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    $post4 = new stdClass();
    $post4->userID = 4;
    $post4->id = 4;
    $post4->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post4->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    return view('creazione', ['posts' => [$post1, $post2, $post3, $post4]]);
})
    ->whereAlpha(['title', 'body'])
    ->whereNumber(['userId', 'id']);
    


//  --------------------------------------------------------------------- //


Route::get('/eliminazione', function () {
    return view('eliminazione');
});


Route::get('/modifica', function () {
    return view('modifica');
});


//  --------------------------------------------------------------------- //


Route::get('/singola-attivita', function () {

    $post = new stdClass();
    $post->userID = 1;
    $post->id = 1;
    $post->title = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
    $post->body = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';

    return view('singola-attivita ', ['post' => $post]);
});
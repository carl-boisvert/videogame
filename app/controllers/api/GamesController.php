<?php

class GamesController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showGames()
    {
        $games = Game::all();
        return Response::json(array(
                'error' => false,
                'games' => $games->toArray()),
            200
        );
    }

    public function showGame($id){
        $game = Game::find($id);
        return Response::json(array(
                'error' => false,
                'game' => $game->toArray()),
            200
        );
    }

}

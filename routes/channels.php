
<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('private-Tweet.{id}', function ($user, $comment) {
    return Auth::check();
});

Broadcast::channel('private-Chat.{id}', function ($user, $chat) {
    return Auth::check();
});

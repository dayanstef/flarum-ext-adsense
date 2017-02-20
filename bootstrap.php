<?php
/**
 * Created by PhpStorm.
 * User: Dejan.Stefanoski
 * Date: 20-Feb-17
 * Time: 3:37 PM
 */

namespace Dayanstef\Adsense;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listeners\AddClientAssets::class);
};
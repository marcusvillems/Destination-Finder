<?php
use App\Models\RouteStop;
use App\Http\Controllers\StopController;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/stops/{stop?}', function ($stop = null) {
    if (!$stop) {
        $stop = Stop::all();
        return $stop;
    } else {
        $array = [];
        $routes = RouteStop::where('stop_id', '=', $stop)->get();
        foreach ($routes as $route){
           $stop2 = RouteStop::where('route_id', '=', $route->route_id)->where('sort_order', '>', $route->sort_order)->get();
            foreach ($stop2 as $desStop){
                $busStop = $desStop->stop;
                array_push($array, $busStop);
            }
            
        }
        return $array;
    }
});

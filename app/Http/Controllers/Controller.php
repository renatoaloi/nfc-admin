<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    function Connection() {
        $server = "localhost";
        $pass="RAQegzT2qDcT";
        $user="serialli_sysseg";
        //$pass = "";
        //$user = "root";
        $db = "serialli_systemseg";

        $connection = mysqli_connect($server, $user, $pass);

        if (!$connection) {
            die('MySQL ERROR: ' . mysqli_error($connection));
        }

        mysqli_select_db($connection, $db) or die('MySQL ERROR: ' . mysqli_error($connection));
        return $connection;
    }

    function converteKmh($contador) {
        $pi = 3.14159265;
        $radius = 147;
        $periodo = 5000;
        $RPM = (($contador) * 60) / ($periodo / 1000);
        return (((4 * $pi * $radius * $RPM) / 60) / 1000) * 3.6;
    }

}

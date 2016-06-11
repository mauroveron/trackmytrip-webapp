<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{

    /**
     * Save the multiple locations entry into database
     **
     * @return JSON
     */
    public function saveLocations()
    {
        return $this->request->all();
    }
}

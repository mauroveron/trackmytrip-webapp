<?php

namespace App\Http\Controllers;

use App\Models\LocationEntry;
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

        $inputEntries = [];
        foreach ($inputEntries as $inputEntry) {
            $entry = new LocationEntry();
            $locationEntry->longitude         = $inputEntry->longitude;
            $locationEntry->latitude          = $inputEntry->latitude;
            $locationEntry->taken_at          = $inputEntry->timestamp;
            $locationEntry->device_identifier = $inputEntry->device_identifier;
            $locationEntry->save();
        }

        return ['status' => 'ok', 'message' => 'Successfully saved ' . count($inputEntries) . ' location entries'];
    }
}

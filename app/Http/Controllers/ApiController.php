<?php

namespace App\Http\Controllers;

use App\Models\LocationEntry;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    /**
     * Returns the latest 200 location entries
     **
     * @return JSON
     */
    public function displayLocationEntries()
    {
        $entries = LocationEntry::orderBy('taken_at')->limit(200)->get();

        return ['status' => 'ok', 'status_message' => 'Query was successful', 'data' => $entries];
    }

    /**
     * Save the multiple locations entry into database
     **
     * @return JSON
     */
    public function saveLocationEntries()
    {
        $inputEntries = $this->request->all();

        foreach ($inputEntries as $inputEntry) {
            $locationEntry                    = new LocationEntry();
            $locationEntry->longitude         = $inputEntry->longitude;
            $locationEntry->latitude          = $inputEntry->latitude;
            $locationEntry->taken_at          = date('Y-m-d H:i:s',$inputEntry->timestamp);
            $locationEntry->device_identifier = $inputEntry->device_identifier;
            $locationEntry->save();
        }

        return ['status' => 'ok', 'status_message' => 'Successfully saved ' . count($inputEntries) . ' location entries'];
    }
}

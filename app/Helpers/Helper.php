<?php

namespace App\Helpers;

class Helper {

    /**
     * Pretty Json
     * @param type $inputArray
     * @param type $statusCode
     * @return type
     */
    public static function prettyJson($inputArray, $statusCode) {
        return response()->json($inputArray, $statusCode, array('Content-Type' => 'application/json'), JSON_PRETTY_PRINT);
    }

    public static function appsetting($name) {
        $value = \DB::table('appsetting')->whereName($name)->first();
        return $value->value;
    }

    public static function updateappsetting($name, $value) {
        \DB::table('appsetting')->whereName($name)->update(['value' => $value]);
    }

}

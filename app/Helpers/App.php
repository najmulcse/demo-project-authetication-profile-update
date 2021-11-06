<?php


if (!function_exists('appApiResponse')) {

    function appApiResponse($code, $message = "The given data was invalid.", $errors = null, $data = null) {

        if(!is_null($errors))
        {
            if(!is_object($errors))
            {
                $errors = (object)$errors;
            }
        }
        return response()->json(
            [
                'message' => $message,
                'errors' => $errors,
                'data' => $data,
                'code' => $code
            ], 200);
    }

}

<?php

// Task 1

Route::post('/form-submit', function (Request $request) {

    $email = $request->input('email');

    if ($request->has('email')) {

        $data = [
            "status" => "success",
            "message" => "Form submitted successfully.",
            "email" => $email
        ];

        return response($data);

    } else {

        $data = [
            "status" => "failed",
            "message" => "Form submission failed."
        ];

        return response()->json($data);
    }

});

// Task 2

Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');
    return response($userAgent);

});
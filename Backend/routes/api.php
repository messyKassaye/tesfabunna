<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
    $api->group(['prefix' => 'auth'], function(Router $api) {
        $api->post('signup', 'App\\Api\\V1\\Controllers\\SignUpController@signUp');
        $api->post('login', 'App\\Api\\V1\\Controllers\\LoginController@login');

        $api->post('recovery', 'App\\Api\\V1\\Controllers\\ForgotPasswordController@sendResetEmail');
        $api->post('reset', 'App\\Api\\V1\\Controllers\\ResetPasswordController@resetPassword');

        $api->post('logout', 'App\\Api\\V1\\Controllers\\LogoutController@logout');
        $api->post('refresh', 'App\\Api\\V1\\Controllers\\RefreshController@refresh');
        $api->get('me', 'App\\Api\\V1\\Controllers\\UserController@me');
    });

    $api->group(['middleware' => 'jwt.auth'], function(Router $api) {
        $api->get('protected', function() {
            return response()->json([
                'message' => 'Access to protected resources granted! You are seeing this text as you provided the token correctly.'
            ]);
        });

        $api->get('refresh', [
            'middleware' => 'jwt.refresh',
            function() {
                return response()->json([
                    'message' => 'By accessing this endpoint, you can refresh your access token at each request. Check out this response headers!'
                ]);
            }
        ]);
    });

    //service

    //entertainment route
    $api->resource('entertainment','App\\Api\\V1\\Controllers\\EntertainmentController');
    $api->resource('services','App\\Api\\V1\\Controllers\\ServiceController');
    $api->resource('surprise','App\\Api\\V1\\Controllers\\SurpriseController');
    $api->resource('surprise_apply','App\\Api\\V1\\Controllers\\SurpiseApplierController');
    $api->resource('essay','App\\Api\\V1\\Controllers\\EssayController');
    $api->resource('gallery','App\\Api\\V1\\Controllers\\GalleryController');
    $api->resource('testimony','App\\Api\\V1\\Controllers\\TestimonyController');
    $api->resource('entertainment_participants','App\\Api\\V1\\Controllers\\EntertainmentParticipantController');
    $api->resource('social_media','App\\Api\\V1\\Controllers\\SocailMediaController');
    $api->resource('feedback','App\\Api\\V1\\Controllers\\FeedbackController');
    $api->resource('base64','App\\Api\\V1\\Controllers\\Base64Controller');
    $api->get('hello', function() {
        return response()->json([
            'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
        ]);
    });
});

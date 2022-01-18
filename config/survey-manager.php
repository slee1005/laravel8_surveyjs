<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes
    'route_prefix'              =>  'survey',

    // The prefix used in api endpoints
    'api_prefix'                =>  'api',

    // The prefix used in admin route
    'admin_prefix'              =>  'surveyadmin',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    */

    // route middleware
    'route_middleware'          =>  ['web'],

    // api middleware
    'api_middleware'            =>  ['api'],

    // admin middleware
    'admin_middleware'          =>  ['web'],

    /*
    |--------------------------------------------------------------------------
    | Other config
    |--------------------------------------------------------------------------
    */

    // Pagination in admin section
    'pagination_perPage'        =>  12,

    // User model
    'user_model'                =>  'App\Models\User',

    // Default locale for survey
    'locale'                    =>  'en',

    // Default theme for survey
    'theme'                     =>  'bootstrapmaterial',

    /*
    |--------------------------------------------------------------------------
    | SurveyJS Builder Configuration
    | More: https://surveyjs.io/Documentation/Builder/?id=surveyeditor
    |--------------------------------------------------------------------------
    */

    'builder'                   =>  [

        'theme'                 =>  'bootstrapmaterial',

        'showEmbededSurveyTab'  =>  true,

        'showJSONEditorTab'     =>  true,

        'showTestSurveyTab'     =>  true,

        'showPropertyGrid'      =>  true,

        'showOptions'           =>  true,

        'showState'             =>  true,

        'haveCommercialLicense' =>  true,
    ],

    /*
    |--------------------------------------------------------------------------
    | SurveyJS Custom Widgets
    |--------------------------------------------------------------------------
    */
    'widgets'                   =>  [

        'icheck'                =>  false,

        'select2'               =>  false,

        'inputmask'             =>  false,

        'jquerybarrating'       =>  false,

        'jqueryuidatepicker'    =>  false,

        'nouislider'            =>  false,

        'select2tagbox'         =>  false,

        'signaturepad'          =>  false,

        'sortablejs'            =>  false,

        'ckeditor'              =>  false,

        'autocomplete'          =>  false,

        'bootstrapslider'       =>  false,
    ],
];

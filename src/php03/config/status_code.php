<?php
$status_code = [
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' =>'準備中',
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' =>'正常に動作',
    ],
    [
        'code' => '301',
        'meaning' => 'Moved Permanetly',
        'description' =>'リクエストしたリソースが恒久的に移動',
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modified',
        'description' =>'リクエストしたリソースが更新されてない',
    ],
    [
        'code' => '400',
        'meaning' => 'Bad Request',
        'description' =>'リクエストに問題',
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' =>'アクセストークン無効、非認証状態',
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' =>'閲覧権限のもの'
    ],
    [
        'code' => '404',
        'meaning' => 'Not found',
        'description' =>'ないんですけど',
    ],
    [
        'code' => '500',
        'meaning' => 'Internal Server Error',
        'description' =>'サーバ内で問題',
    ],
    [
        'code' => '502',
        'meaning' => 'Bad Gateway',
        'description' =>'サーバが必要な機能を満たしてない',
    ],
    [
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'description' =>'サーバアクセス不可',
    ]
];

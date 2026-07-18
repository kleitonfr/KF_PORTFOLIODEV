<?php

return [
    'layout' => 'layouts.app',
    'asset_url' => null,
    'middleware' => ['web'],
    'temporary_file_upload' => [
        'disk' => 'local',
        'rules' => 'file|mimes:png,jpg,jpeg,gif,svg,webp|max:2048',
    ],
];

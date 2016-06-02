Getting started with Yii2 AdminLTE - Advanced App Template .
============================================================

#### 1.- Installation:

#####Linux:

```
    php composer.phar require --prefer-dist cjtterabytesoft/yii2-adminlte-advanced "dev-master"
```

#####Windows:

```
    composer require --prefer-dist cjtterabytesoft/yii2-adminlte-advanced "dev-master"
```

#####Or add to composer.json:

```
    "cjtterabytesoft/yii2-adminlte-advanced": "dev-master"
```

#### 2.- Configure:

#####Configure Backend:

######[config/main.php]:

```php
<?php
    $params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'),
        require(__DIR__ . '/../../common/config/params-local.php'),
        require(__DIR__ . '/params.php'),
        require(__DIR__ . '/params-local.php')
    );
    
    return [
        // Language Theme Backend - [en - es] //
        'language' => 'en', 
        'components' => [
            // Configuration Theme [AdminLTE - BackEnd - Advanced] //
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@app/views/layouts' => '@cjtterabytesoft/adminlte/advanced/views/backend/layouts',
                        '@app/views/site'    => '@cjtterabytesoft/adminlte/advanced/views/backend/site',
                    ],
                ],
            ]
        ],
        'params' => $params,
    ];
```

######[config/params.php]:

```php
<?php

    return [

        // Yii2 AdminLTE - Advanced App Template - [Backend - Params] //
    
        'AdminLTESkinBackend'   =>  'skin-black',       // Skin Theme AdminLte Options:
                                                        // [skin-black - skin-black-light], [skin-blue - skin-blue-light] //
                                                        // [skin-green - skin-green-light], [skin-purple - skin-purple-light] //
                                                        // [skin-red - skin-red-light], [skin-yellow, skin-yellow-light] //
    ];
```

#####Configure Frontend: 

######[config/main.php]:

```php
<?php
    $params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'),
        require(__DIR__ . '/../../common/config/params-local.php'),
        require(__DIR__ . '/params.php'),
        require(__DIR__ . '/params-local.php')
    );
    
    return [
        // Language Theme Frontend - [en - es] //
        'language' => 'en', 
        'components' => [
            // Configuration Theme [AdminLTE - Frontend - Advanced] //
            'view' => [
                'theme' => [
                    'pathMap' => [
                        '@app/views/layouts' => '@cjtterabytesoft/adminlte/advanced/views/backend/layouts',
                        '@app/views/site'    => '@cjtterabytesoft/adminlte/advanced/views/backend/site',
                    ],
                ],
            ]
        ],
        'params' => $params,
    ];
```

######[config/params.php]:

```php
<?php

    return [

        // Yii2 AdminLTE - Advanced App Template - [Frontend - Params] //
    
        'AdminLTESkinFrontend'   =>  'skin-black',      // Skin Theme AdminLte Options:
                                                        // [skin-black - skin-black-light], [skin-blue - skin-blue-light] //
                                                        // [skin-green - skin-green-light], [skin-purple - skin-purple-light] //
                                                        // [skin-red - skin-red-light], [skin-yellow, skin-yellow-light] //
```
    
#####Configure Common: 

######[config/params.php]:

```php
<?php
    return [
        'supportEmail' => 'support@example.com',
        'user.passwordResetTokenExpire' => 3600,

        // Yii2 AdminLTE - Advanced App Template - [Common - Params] //

        'AdminEmail'            => 'admin@example.com',                                                      // Your Email Admin //
        'Author'                => 'CJTTERABYTE SOFT',                                                       // Your Brand //
        'Facebook_Account'      => 'https://www.facebook.com/username',                                      // Your Facebook Account //
        'Google_Account'        => 'https://www.google.com/+username',                                       // Your Google+ Account //
        'Images_Url_30'         => 'http://localhost.intradvanced/images/avatar/profile/30/icon-avatar.png', // Your Url Avatar Images //
        'Images_Url_60'         => 'http://localhost.intradvanced/images/avatar/profile/60/icon-avatar.png', // Your Url Avatar Images //
        'Linkedin_Account'      => 'https://www.linkedin.com/in/username',                                   // Your Linkedin Account //
        'Logo-Yii'              => 'http://localhost.intradvanced/images/logos/yii.png',                     // Logo YII 2 //
        'Twitter_Account'       => 'https://twitter.com/username',                                           // Your Twitter Account //
        'WebName'               => 'My Application',                                                         // Your Application Name //
    ];
```
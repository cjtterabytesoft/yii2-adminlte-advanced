Getting started with Yii2 AdminLTE - Advanced App Template.
===========================================================

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

#### 3.- Overriding views:

#####Configure [backend - config/main.php]:

```php
        // Configuration Theme - Overriding views - [Backend - Menu Sidebar - Custom] //
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@cjtterabytesoft/adminlte/advanced/views/backend/layouts' => '@app/views/menu_custom'
                ],
            ],
        ],
```

#####Configure [frontend - config/main.php]:

```php
        // Configuration Theme - Overriding views - [Frontend - Menu Sidebar - Custom] //
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@cjtterabytesoft/adminlte/advanced/views/frontend/layouts' => '@app/views/menu_custom'
                ],
            ],
        ],
```

#####View Custom [_sidebar.php]:

```php
<?php

/*
 * This file is part of the Cjt Terabyte LLC [yii2-extension].
 *
 * (c) Cjt Terabyte LLC [yii2-extension] <http://github.com/cjtterabytesoft>.
 * For the full copyright and license information, please view the LICENSE.md.
 * file that was distributed with this source code.
 *
 * @link http://www.cjtterabyte.com.
 * @author Wilmer Arámbula <cjtterabytellc@gmail.com>.
 * @copyright (c) 2015 Cjt Terabyte LLC.
 * @Intradvanced: Custom Menu[_sidebar].
 * @since 1.0
 */

use yii\helpers\Html;
use cjtterabytesoft\adminlte\advanced\widgets\MainSidebar;

$sidebar_menu[0] = ['label' => Yii::t('adminlte', 'Panel de Control'), 'options' => ['class' => 'header'], 'template' => '{label}'];
$sidebar_menu[1] = ['label' => Yii::t('adminlte', 'Home'), 'icon' => Html::tag('i', '', ['class' => 'fa ion-ios-home fa-lg']), 'url' => ['/site/index']];
$sidebar_menu[2] = ['label' => Yii::t('app', 'Level 1'), 'icon' => '<i class="fa fa-cogs"></i>', 'options' =>
                       ['class' => 'treeview'], 'items' => [
                           ['label' => Yii::t('app', 'Level 1.1'), 'icon' => '<i class="fa fa-circle"></i>', 'options' =>
                               ['class' => 'treeview'], 'items' => [
                                   ['icon' => '<i class="fa fa-circle-o"></i>', 'label' => Yii::t('app', 'Level 1.1.1'), 'url' => '#'],
                               ],
                           ],
                           ['icon' => '<i class="fa fa-circle"></i>', 'label' => Yii::t('app', 'Level 1.2'), 'url' => '#'],
                           ['icon' => '<i class="fa fa-circle"></i>', 'label' => Yii::t('app', 'Level 1.3'), 'url' => '#'],
                       ]
                    ];
$sidebar_menu[3] = ['label' => Yii::t('adminlte', 'Logout'), 'icon' => Html::tag('i', '', ['class' => 'fa fa-sign-out fa-lg']), 
                       'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];

echo MainSidebar::widget([
    'options'         => ['class' => 'sidebar-menu'],
    'labelTemplate'   => '<a href="#">{icon}<span>{label}</span>{right-icon}{badge}</a>',
    'linkTemplate'    => '<a href="{url}" {linkOptions}>{icon}<span>{label}</span>{right-icon}{badge}</a>',
    'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
    'activateParents' => true,
    'items'           => $sidebar_menu,
]);
```
<?php
/**
 * @link https://github.com/borodulin/yii2-modal-form
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-modal-form/blob/master/LICENSE
 */
namespace siripravi\modal;

class ModalFormAsset5 extends \yii\web\AssetBundle
{

    public $sourcePath = '@siripravi/modal/assets';

    public $js = [
        'avalynx-loader.js',
        'modal-form.js'
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}
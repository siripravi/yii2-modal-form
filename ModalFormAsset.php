<?php
/**
 * @link https://github.com/borodulin/yii2-modal-form
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-modal-form/blob/master/LICENSE
 */
namespace siripravi\modal;

class ModalFormAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@siripravi/modal/assets';

    public $js = [
        'modal-form.js'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
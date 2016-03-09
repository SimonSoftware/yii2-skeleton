<?php
/**
 * Created by PhpStorm.
 * User: paolo
 * Date: 09/03/16
 * Time: 23:06
 */
namespace app\components;

use yii\base\BootstrapInterface;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];

    public function bootstrap($app)
    {
        $preferredLanguage = isset($app->request->cookies['language']) ?
            (string)$app->request->cookies['language'] :
            $app->request->getPreferredLanguage($this->supportedLanguages);
        $app->language = $preferredLanguage;
    }
}
<?php

namespace jonasw91\mdl\widgets;

use jonasw91\mdl\helpers\Html;
use yii\base\InvalidConfigException;
use yii\web\JsExpression;

/**
 * Description:
 *
 * @link https://getmdl.io/components/index.html#badges-section
 *
 * Class Menu
 * @package jonasw91\mdl\widgets
 *
 * @author Jonas Wehner <jonaswehner@outlook.de>
 * @version 1.0
 */
class MenuBar extends MdlWidget
{
    const TYPE_DEFAULT = 'bar';

    protected $defaultMdlOptions = [
        'type' => self::TYPE_DEFAULT,
        'menuItems' => [
        ],
        'menuOptions' => [
        ],
        'menuMdlOptions' => [
        ]
    ];

    /**
     * @var array Widget types
     */
    public $types = [
        self::TYPE_DEFAULT,
    ];

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        $this->initMdlComponent();

    }

    /**
     * @return string
     */
    public function run()
    {
        return Html::tag('div', Menu::widget([
            'items' => $this->mdlOptions['menuItems'],
            'options' => $this->mdlOptions['menuOptions'],
            'mdlOptions' => $this->mdlOptions['menuMdlOptions'],
        ]), $this->options);
    }
}
<?php declare(strict_types=1);

namespace SitegeistShopwareComponentExample\Subscribers;

use Enlight\Event\SubscriberInterface;

/**
 * Class Frontend
 * @package SitegeistShopwareFusionComponents\Subscribers
 */
class Frontend implements SubscriberInterface
{
    /** @var string */
    private $pluginPath;

    /**
     * Frontend constructor.
     * @param $pluginPath
     */
    public function __construct($pluginPath)
    {
        $this->pluginPath = $pluginPath;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch_Frontend' => 'onFrontend',
            'Enlight_Controller_Action_PreDispatch_Widgets' => 'onFrontend'
        ];
    }

    /**
     * @param \Enlight_Controller_ActionEventArgs $args
     * @throws \Exception
     */
    public function onFrontend(\Enlight_Controller_ActionEventArgs $args)
    {
        Shopware()->Container()->get('template')->addTemplateDir($this->pluginPath . '/Resources/');
        Shopware()->Container()->get('template')->addPluginsDir($this->pluginPath . '/Resources/_private/smarty/');

        Shopware()->Container()->get('template')->assign('astFile', $this->pluginPath . '/Resources/_private/Ast.json');
    }
}
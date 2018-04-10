<?php

/**
 * GoldengateTeaser Component
 *
 * Smarty-parameter:
 *
 * 'title': PropTypes.string
 * 'description': PropTypes.string
 * 'imageUri': PropTypes.string
 * 'priceValue': PropTypes.string
 * 'priceCurrency': PropTypes.string
 * 'uri': PropTypes.string
 * 'isLarge': PropTypes.boolean
 */

use SitegeistShopwareFusionRenderer\Components\FusionRenderer;

function smarty_function_GoldengateTeaser($params, &$template)
{
    $fusionAst = $template->smarty->tpl_vars['astFile']->value;
    $fusionPath = 'render_Sitegeist_GoldenGate_Neos_Plugin_Component_Teaser';
    $fusionContext = [];

    $fusionContext['title'] = $params['title'];
    $fusionContext['description'] = $params['description'];
    $fusionContext['imageUri'] = $params['imageUri'];
    $fusionContext['priceValue'] = $params['priceValue'];
    $fusionContext['priceCurrency'] = $params['priceCurrency'];
    $fusionContext['uri'] = $params['uri'];
    $fusionContext['isLarge'] = $params['isLarge'] ?: false;

    return FusionRenderer::renderFusion($fusionAst, $fusionPath, $fusionContext);
}
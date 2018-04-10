<?php

/**
 * GoldengateTeaserList Component
 *
 * Smarty-parameter:
 *
 * 'items' : PropTypes.arrayOf(
 *      PropTypes.shape({
 *          'title': PropTypes.string,
 *          'description': PropTypes.string,
 *          'imageUri': PropTypes.string,
 *          'priceValue': PropTypes.string,
 *          'priceCurrency': PropTypes.string,
 *          'uri': PropTypes.string
 *      })
 *    )
 */

use SitegeistShopwareFusionRenderer\Components\FusionRenderer;

function smarty_function_GoldengateTeaserList($params, &$template)
{
    $fusionAst = $template->smarty->tpl_vars['astFile']->value;
    $fusionPath = 'render_Sitegeist_GoldenGate_Neos_Plugin_Component_TeaserList';

    $fusionContext = [];
    $fusionContext['items'] = $params['items'];

    return FusionRenderer::renderFusion($fusionAst, $fusionPath, $fusionContext);
}
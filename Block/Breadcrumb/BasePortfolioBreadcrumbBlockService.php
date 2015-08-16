<?php

/*
 * This file is part of the NzPortfolioBundle.
 *
 * (c) Nadir Zenith <2cb.md2@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nz\PortfolioBundle\Block\Breadcrumb;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\SeoBundle\Block\Breadcrumb\BaseBreadcrumbMenuBlockService;

/**
 * Abstract class for work breadcrumbs
 *
 * @author Nadir Zenith <2cb.md2@gmail.com>
 */
abstract class BasePortfolioBreadcrumbBlockService extends BaseBreadcrumbMenuBlockService
{
    /**
     * {@inheritdoc}
     */
    protected function getRootMenu(BlockContextInterface $blockContext)
    {
        $menu = parent::getRootMenu($blockContext);

        $menu->addChild('nz_portfolio_archive_breadcrumb', array(
            'route'  => 'nz_portfolio_home',
            'extras' => array('translation_domain' => 'NzPortfolioBundle')
        ));

        return $menu;
    }
}

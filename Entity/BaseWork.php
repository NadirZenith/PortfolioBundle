<?php

/*
 * This file is part of the NzPortfolioBundle.
 *
 * (c) Nadir Zenith <2cb.md2@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nz\PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Nz\PortfolioBundle\Model\Work as ModelWork;

abstract class BaseWork extends ModelWork
{

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->tags = new ArrayCollection();
        /* $this->comments = new ArrayCollection(); */

        $this->setPublicationDateStart(new \DateTime);
    }
}

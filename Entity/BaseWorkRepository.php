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

use Doctrine\ORM\EntityRepository;

class BaseWorkRepository extends EntityRepository
{

    /**
     * return last work query builder.
     *
     * @param int $limit
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findLastWorkQueryBuilder($limit)
    {
        return $this->createQueryBuilder('w')
                ->where('w.enabled = true')
                ->orderby('w.createdAt', 'DESC');
    }

}

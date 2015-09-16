<?php

/*
 * This file is part of the NzPortfolioBundle.
 *
 * (c) Nadir Zenith <2cb.md2@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nz\PortfolioBundle\Model;

use Sonata\ClassificationBundle\Model\CollectionInterface;
use Sonata\ClassificationBundle\Model\TagInterface;

interface WorkInterface
{

    /**
     * @return mixed
     */
    public function getId();

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle();

    /**
     * Set abstract
     *
     * @param string $abstract
     */
    public function setAbstract($abstract);

    /**
     * Get abstract
     *
     * @return string $abstract
     */
    public function getAbstract();

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content);

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled();

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return integer $slug
     */
    public function getSlug();
    /**
     * Set link
     *
     * @param string $slug
     */
    public function setLink($slug);

    /**
     * Get slug
     *
     * @return string $link
     */
    public function getLink();

    /**
     * Set publication_date_start
     *
     * @param \DateTime $publicationDateStart
     */
    public function setPublicationDateStart(\DateTime $publicationDateStart = null);

    /**
     * Get publication_date_start
     *
     * @return \DateTime $publicationDateStart
     */
    public function getPublicationDateStart();

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Get created_at
     *
     * @return \DateTime $createdAt
     */
    public function getCreatedAt();

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Get updated_at
     *
     * @return \Datetime $updatedAt
     */
    public function getUpdatedAt();

    /**
     * Add tags
     *
     * @param \Sonata\ClassificationBundle\Model\TagInterface $tags
     */
    public function addTags(TagInterface $tags);

    /**
     * Get tags
     *
     * @return array $tags
     */
    public function getTags();

    /**
     * @param $tags
     *
     * @return mixed
     */
    public function setTags($tags);

    /**
     * @return string
     */
    public function getYear();

    /**
     * @return string
     */
    public function getMonth();

    /**
     * @return string
     */
    public function getDay();

    /**
     * @return boolean
     */
    public function isPublic();

    /**
     * @param mixed $author
     *
     * @return mixed
     */
    public function setAuthor($author);

    /**
     * @return mixed
     */
    public function getAuthor();

    /**
     * @param mixed $image
     *
     * @return mixed
     */
    public function setImage($image);

    /**
     * @return mixed
     */
    public function getImage();
    /**
     * @param mixed $image
     *
     * @return mixed
     */
    public function setGallery($gallery);

    /**
     * @return mixed
     */
    public function getGallery();

    /**
     * @return \Sonata\ClassificationBundle\Model\CollectionInterface
     */
    public function getCollection();

    /**
     * @param CollectionInterface $collection
     */
    public function setCollection(CollectionInterface $collection = null);

    /**
     * @param string $contentFormatter
     */
    public function setContentFormatter($contentFormatter);

    /**
     * @return string
     */
    public function getContentFormatter();

    /**
     * @param string $rawContent
     */
    public function setRawContent($rawContent);

    /**
     * @return string
     */
    public function getRawContent();
}

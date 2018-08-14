<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:51
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferVariants\ParameterModel;


class Offer
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string|null
     */
    private $colorPattern;

    public function __construct(string $id, ?string $colorPattern = null)
    {
        $this->id = $id;
        $this->colorPattern = $colorPattern;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getColorPattern(): ?string
    {
        return $this->colorPattern;
    }

    /**
     * @param null|string $colorPattern
     */
    public function setColorPattern(?string $colorPattern): void
    {
        $this->colorPattern = $colorPattern;
    }


}

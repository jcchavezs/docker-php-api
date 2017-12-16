<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Node
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var NodeVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var NodeSpec
     */
    protected $spec;
    /**
     * @var NodeDescription
     */
    protected $description;

    /**
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return NodeVersion
     */
    public function getVersion(): ?NodeVersion
    {
        return $this->version;
    }

    /**
     * @param NodeVersion $version
     *
     * @return self
     */
    public function setVersion(?NodeVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return NodeSpec
     */
    public function getSpec(): ?NodeSpec
    {
        return $this->spec;
    }

    /**
     * @param NodeSpec $spec
     *
     * @return self
     */
    public function setSpec(?NodeSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return NodeDescription
     */
    public function getDescription(): ?NodeDescription
    {
        return $this->description;
    }

    /**
     * @param NodeDescription $description
     *
     * @return self
     */
    public function setDescription(?NodeDescription $description): self
    {
        $this->description = $description;

        return $this;
    }
}
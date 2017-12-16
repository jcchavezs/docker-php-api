<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class EndpointPortConfig
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @var int
     */
    protected $targetPort;
    /**
     * @var int
     */
    protected $publishedPort;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * @return int
     */
    public function getTargetPort(): ?int
    {
        return $this->targetPort;
    }

    /**
     * @param int $targetPort
     *
     * @return self
     */
    public function setTargetPort(?int $targetPort): self
    {
        $this->targetPort = $targetPort;

        return $this;
    }

    /**
     * @return int
     */
    public function getPublishedPort(): ?int
    {
        return $this->publishedPort;
    }

    /**
     * @param int $publishedPort
     *
     * @return self
     */
    public function setPublishedPort(?int $publishedPort): self
    {
        $this->publishedPort = $publishedPort;

        return $this;
    }
}
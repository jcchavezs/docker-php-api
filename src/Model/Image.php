<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Image
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $repoTags;
    /**
     * @var string[]
     */
    protected $repoDigests;
    /**
     * @var string
     */
    protected $parent;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $container;
    /**
     * @var Config
     */
    protected $containerConfig;
    /**
     * @var string
     */
    protected $dockerVersion;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var Config
     */
    protected $config;
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $virtualSize;
    /**
     * @var GraphDriver
     */
    protected $graphDriver;
    /**
     * @var ImageRootFS
     */
    protected $rootFS;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoTags(): ?array
    {
        return $this->repoTags;
    }

    /**
     * @param string[] $repoTags
     *
     * @return self
     */
    public function setRepoTags(?array $repoTags): self
    {
        $this->repoTags = $repoTags;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoDigests(): ?array
    {
        return $this->repoDigests;
    }

    /**
     * @param string[] $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(?array $repoDigests): self
    {
        $this->repoDigests = $repoDigests;

        return $this;
    }

    /**
     * @return string
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @param string $parent
     *
     * @return self
     */
    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }

    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer(?string $container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return Config
     */
    public function getContainerConfig(): ?Config
    {
        return $this->containerConfig;
    }

    /**
     * @param Config $containerConfig
     *
     * @return self
     */
    public function setContainerConfig(?Config $containerConfig): self
    {
        $this->containerConfig = $containerConfig;

        return $this;
    }

    /**
     * @return string
     */
    public function getDockerVersion(): ?string
    {
        return $this->dockerVersion;
    }

    /**
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(?string $dockerVersion): self
    {
        $this->dockerVersion = $dockerVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Config
     */
    public function getConfig(): ?Config
    {
        return $this->config;
    }

    /**
     * @param Config $config
     *
     * @return self
     */
    public function setConfig(?Config $config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @return string
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }

    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * @return string
     */
    public function getOs(): ?string
    {
        return $this->os;
    }

    /**
     * @param string $os
     *
     * @return self
     */
    public function setOs(?string $os): self
    {
        $this->os = $os;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getVirtualSize(): ?int
    {
        return $this->virtualSize;
    }

    /**
     * @param int $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(?int $virtualSize): self
    {
        $this->virtualSize = $virtualSize;

        return $this;
    }

    /**
     * @return GraphDriver
     */
    public function getGraphDriver(): ?GraphDriver
    {
        return $this->graphDriver;
    }

    /**
     * @param GraphDriver $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(?GraphDriver $graphDriver): self
    {
        $this->graphDriver = $graphDriver;

        return $this;
    }

    /**
     * @return ImageRootFS
     */
    public function getRootFS(): ?ImageRootFS
    {
        return $this->rootFS;
    }

    /**
     * @param ImageRootFS $rootFS
     *
     * @return self
     */
    public function setRootFS(?ImageRootFS $rootFS): self
    {
        $this->rootFS = $rootFS;

        return $this;
    }
}
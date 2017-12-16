<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Plugin
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var PluginSettings
     */
    protected $settings;
    /**
     * @var PluginConfig
     */
    protected $config;

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
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return PluginSettings
     */
    public function getSettings(): ?PluginSettings
    {
        return $this->settings;
    }

    /**
     * @param PluginSettings $settings
     *
     * @return self
     */
    public function setSettings(?PluginSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return PluginConfig
     */
    public function getConfig(): ?PluginConfig
    {
        return $this->config;
    }

    /**
     * @param PluginConfig $config
     *
     * @return self
     */
    public function setConfig(?PluginConfig $config): self
    {
        $this->config = $config;

        return $this;
    }
}
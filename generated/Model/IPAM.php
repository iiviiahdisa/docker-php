<?php

namespace Docker\API\Model;

class IPAM
{
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var string[][]|null
     */
    protected $config;

    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     *
     * @return self
     */
    public function setDriver($driver = null)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * @return string[][]|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param string[][]|null $config
     *
     * @return self
     */
    public function setConfig($config = null)
    {
        $this->config = $config;

        return $this;
    }
}

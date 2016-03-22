<?php

namespace TimeInc\Tealium;

/**
 * Class Tealium.
 *
 * @author andy.thorne@timeinc.com
 */
class Tealium
{
    const TEALIUM_DEV = 'dev';
    const TEALIUM_QA = 'qa';
    const TEALIUM_PROD = 'prod';

    /**
     * @var Udo
     */
    private $udo;

    /**
     * @var string
     */
    private $environment;

    /**
     * @var string
     */
    private $organisation;

    /**
     * @var string
     */
    private $app;

    /**
     * @param string $organisation The name of the tealium orgainisation
     * @param string $app          The tealium app name
     * @param Udo    $udo          Default UDO
     * @param string $environment  Th Tealium environment (Tealium:TEALIUM_* constant)
     */
    public function __construct($organisation, $app, Udo $udo, $environment = self::TEALIUM_PROD)
    {
        $this->organisation = $organisation;
        $this->app = $app;
        $this->udo = $udo;
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param string $organisation
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param string $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }

    /**
     * @return Udo
     */
    public function getUdo()
    {
        return $this->udo;
    }

    /**
     * @param Udo $udo
     */
    public function setUdo($udo)
    {
        $this->udo = $udo;
    }
}

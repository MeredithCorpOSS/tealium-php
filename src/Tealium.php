<?php
/**
 * Copyright (c) 2016.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:.
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

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

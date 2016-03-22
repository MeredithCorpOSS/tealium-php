<?php

namespace Tests\TimeInc\Tealium;

use TimeInc\Tealium\Tealium;
use TimeInc\Tealium\Udo;

/**
 * Class TealiumTest.
 *
 * @author andy.thorne@timeinc.com
 *
 * @group tealium
 */
class TealiumTest extends \PHPUnit_Framework_TestCase
{
    public function testEnvironment()
    {
        $udo = new Udo();
        $tealium = new Tealium('org', 'app', $udo, Tealium::TEALIUM_DEV);

        $this->assertEquals(Tealium::TEALIUM_DEV, $tealium->getEnvironment());

        $tealium->setEnvironment(Tealium::TEALIUM_PROD);
        $this->assertEquals(Tealium::TEALIUM_PROD, $tealium->getEnvironment());
    }

    public function testOrganisation()
    {
        $udo = new Udo();
        $tealium = new Tealium('org', 'app', $udo, Tealium::TEALIUM_DEV);

        $this->assertEquals('org', $tealium->getOrganisation());

        $tealium->setOrganisation('new_org');
        $this->assertEquals('new_org', $tealium->getOrganisation());
    }

    public function testApp()
    {
        $udo = new Udo();
        $tealium = new Tealium('org', 'app', $udo, Tealium::TEALIUM_DEV);

        $this->assertEquals('app', $tealium->getApp());

        $tealium->setApp('new_app');
        $this->assertEquals('new_app', $tealium->getApp());
    }

    public function testUdo()
    {
        $udo = new Udo();
        $tealium = new Tealium('org', 'app', $udo, Tealium::TEALIUM_DEV);

        $this->assertEquals($udo, $tealium->getUdo());

        $newUdo = new Udo('custom_namespace');
        $tealium->setUdo($newUdo);
        $this->assertEquals($newUdo, $tealium->getUdo());
    }
}

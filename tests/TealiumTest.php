<?php
/**
 * Copyright (c) 2016.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE 
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS 
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

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

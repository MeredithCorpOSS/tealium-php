<?php

namespace Tests\TimeInc\Tealium;

use TimeInc\Tealium\Udo;

/**
 * Class UdoTest.
 *
 * @author andy.thorne@timeinc.com
 *
 * @group tealium
 */
class UdoTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultName()
    {
        $udo = new Udo();

        $this->assertEquals('utag_data', $udo->getName());
    }

    public function testCustomName()
    {
        $udo = new Udo('custom_data');

        $this->assertEquals('custom_data', $udo->getName());

        $udo->setName('new_namespace');
        $this->assertEquals('new_namespace', $udo->getName());
    }

    public function testDefaultData()
    {
        $udo = new Udo(
            'utag_data', [
            'data1' => 'value1',
            'data2' => [
                'subdata1' => 'subvalue1',
                'subdata2' => 'subvalue2',
            ],
        ]
        );

        $this->assertEquals('value1', $udo->properties['data1']);
        $this->assertTrue(is_array($udo->properties['data2']));
        $this->assertEquals('subvalue1', $udo->properties['data2']['subdata1']);
        $this->assertEquals('subvalue2', $udo->properties['data2']['subdata2']);
    }

    public function testCount()
    {
        $udo = new Udo(
            'utag_data', [
            'data1' => 'value1',
            'data2' => [
                'subdata1' => 'subvalue1',
                'subdata2' => 'subvalue2',
            ],
        ]
        );

        $this->assertEquals(2, count($udo->properties));
    }

    public function testDataIteration()
    {
        $data = [
            'data1' => 'value1',
            'data2' => [
                'subdata1' => 'subvalue1',
                'subdata2' => 'subvalue2',
            ],
        ];
        $udo = new Udo('utag_data', $data);

        foreach ($udo->properties as $key => $value) {
            $this->assertArrayHasKey($key, $data);
            $this->assertEquals($data[$key], $value);
        }
    }

    public function testSetAsArray()
    {
        $udo = new Udo();

        $udo->properties['key'] = 'value';

        $this->assertTrue(isset($udo->properties['key']));
        $this->assertEquals('value', $udo->properties['key']);
    }

    public function testRemoveValue()
    {
        $udo = new Udo(
            'udo', [
            'key' => 'value',
        ]
        );

        unset($udo->properties['key']);

        $this->assertFalse(isset($udo->properties['key']));
    }

    public function testToString()
    {
        $data = [
            'data1' => 'value1',
            'data2' => [
                'subdata1' => 'subvalue1',
                'subdata2' => 'subvalue2',
            ],
        ];
        $udo = new Udo('utag_data', $data);

        $this->assertTrue(is_string((string) $udo));
        $this->assertEquals(json_encode($data), (string) $udo);
    }
}

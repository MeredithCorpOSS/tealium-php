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
 * Class Udo.
 *
 * @author andy.thorne@timeinc.com
 */
class Udo
{
    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var array
     */
    public $properties;

    /**
     * @param string $namespace  The JavaScript namespace to use
     * @param array  $properties The default properties
     */
    public function __construct($namespace = 'utag_data', array $properties = [])
    {
        $this->namespace = $namespace;
        $this->properties = $properties;
    }

    /**
     * Export the UDO as JavaScript.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->properties);
    }

    /**
     * Get the UDO namespace.
     *
     * @return string
     */
    public function getName()
    {
        return $this->namespace;
    }

    /**
     * Set the UDO namespace.
     *
     * @param string $namespace
     */
    public function setName($namespace)
    {
        $this->namespace = $namespace;
    }
}

<?php

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

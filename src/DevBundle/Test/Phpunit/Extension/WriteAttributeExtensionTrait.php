<?php

namespace RP\DevBundle\Test\Phpunit\Extension;

trait WriteAttributeExtensionTrait
{
    /**
     * @param string|object $classOrObject
     * @param string        $attributeName
     * @param mixed         $attributeValue
     */
    public function writeAttribute($classOrObject, $attributeName, $attributeValue)
    {
        $rp = new \ReflectionProperty($classOrObject, $attributeName);
        $rp->setAccessible(true);
        $rp->setValue($classOrObject, $attributeValue);
        $rp->setAccessible(false);
    }

    /**
     * @param string|object $classOrObject
     * @param mixed         $attributeValue
     */
    public function writeIdAttribute($classOrObject, $attributeValue)
    {
        $this->writeAttribute($classOrObject, 'id', $attributeValue);
    }
}

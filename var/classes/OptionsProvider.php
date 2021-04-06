<?php

namespace Website;

use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\SelectOptionsProviderInterface;


class OptionsProvider implements SelectOptionsProviderInterface
{
    /**
     * @param array $context 
     * @param Data $fieldDefinition 
     * @return array
     */
    public function getOptions($context, $fieldDefinition) {
        $object = isset($context["object"]) ? $context["object"] : null;
        $dynSelect = "id: " . ($object ? $object->getId() : "unknown") . " - " .$context["fieldname"];
        $result = array(

            array("key" => $dynSelect .' == A', "value" => 2),
            array("key" => $dynSelect .' == C', "value" => 4),
            array("key" => $dynSelect .' == F', "value" => 5)

        );
        return $result;
    }

    /**
     * Returns the value which is defined in the 'Default value' field  
     * @param array $context 
     * @param Data $fieldDefinition 
     * @return mixed
     */
    public function getDefaultValue($context, $fieldDefinition) {
        return $fieldDefinition->getDefaultValue();
    }

    /**
     * @param array $context 
     * @param Data $fieldDefinition 
     * @return bool
     */
    public function hasStaticOptions($context, $fieldDefinition) {
        return true;
    }

}

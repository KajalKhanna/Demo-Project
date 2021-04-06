<?php
namespace AppBundle\EventListener;
  
use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;

class TestListener {
     
   
    /**
    * @param DataObjectEvent $e
    */
    
    public function onPreUpdate(DataObjectEvent $e)
    {
    
   if($e->getObject() instanceOf Demo)
   {
   
   
   	$demo= $e->getObject();
   	if($demo->getManufacturedOn() > "2021-03-01")
   	{
   	
   	throw  new \Pimcore\Model\Element\ValidationException("Invalid Data!!!!!!!!!!!!!!!!!");
   	}
   
   }
    
    }    
}

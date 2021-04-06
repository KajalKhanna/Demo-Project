<?php
namespace AppBundle\EventListener;
  
use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Model\DataObject\Demo;

class NewListener {
     
  
     
     
    public function BeforeSave(DataObjectEvent $e) {
       
   if($e->getObject() instanceof Demo) {
            // do something with the object
            $demo = $e->getObject(); 
          
           if($demo->getManufacturedOn() < $demo->getExpireon())
           {
           throw  new \Pimcore\Model\Element\ValidationException("Invalid Date!!!!!!!!!!!!!!!!!");
           }
            
            
        }
    }
}

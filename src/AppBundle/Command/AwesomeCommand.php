<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\Asset;

use Pimcore\Model\Document;
use Pimcore\Model\DataObject\Data\BlockElement;
use Pimcore;
use Pimcore\Model\DataObject\Demo;


class AwesomeCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('awesome:command')
            ->setDescription('Awesome command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // dump
       
    
    
        
        
        $obj = new \Pimcore\Model\DataObject\Demo();
   //     $object = DataObject\AbstractObject::getById(2);
        
      //  $object->setVendorrelation(Document::getById(9));

      $unit = DataObject\QuantityValue\Unit::getByAbbreviation("kg");
      
      $image = \Pimcore\Model\Asset\Image::getByPath("/myassets/rainbow cake.jpeg");
    //  $obj = DataObject\AbstractObject::getById(9);
    //  $obj->setVendorRelation(Document::getById(3));
          $obj->setKey('key30');
        $obj->setPublished(true);
        $obj->setParentId(9);
        $obj->setSKU("1030");
        $obj->setName("product30");
        $obj->setWeight(new DataObject\Data\QuantityValue(1, $unit->getId()));
        $obj->setImage($image);
        
         $object = new \Pimcore\Model\DataObject\Category\Listing();
         
         $object->setCondition("name = ?", 'MyCake1');
         
         //$object->setLimit(1);
         foreach($object as $objects)
         {
         	$obj->setCatRel($objects);
         }
         
         
         
         
     // $object = AbstractObject::getById(4);
	
	 $data = [
	    "input1" => new BlockElement("input1", 'input', "NewValue"),
	    "input2" => new BlockElement("input2", 'input', "NewValue")
	   
	    ];
	 
	
	 $obj->setBlock([$data]);
	 
	 

		
       
        $tireBrick = new DataObject\Objectbrick\Data\Tire($obj);
        $tireBrick->setTiretype("summer");
        
        
        
     
        
      
        $obj->getBricks()->setTire($tireBrick);
        $obj->save();
        $this->dump("New Record Inserted!!!");

    }
}

<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DatablockElement;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\Demo;


use Pimcore\Model\Document;

use Pimcore;


class AddBlock extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('addblock:command')
            ->setDescription('Add a Block command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // dump
        
    
        
        
     //   $blockElement = new \Pimcore\Model\DatablockElement\Demo();
  //$blockElement = AbstractblockElement::getById(9);
 
 $data = [
    "Text1" => new BlockElement('Text1', 'input', 'NewValue1'),
    "Text2" => new BlockElement('Text2', 'input', 'NewValue2'),
   
    ];
 
 $blockElement = new Demo();
    $blockElement->setKey('key7');
        $blockElement->setPublished(true);
        $blockElement->setParentId(9);
 $blockElement->setBlock([$data]);
        $blockElement->save();
        $this->dump("New Block Inserted!!!");

    }
}

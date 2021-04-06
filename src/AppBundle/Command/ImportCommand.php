<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\Asset;
use Symfony\Component\Console\Input\InputOption;
use Pimcore\Model\Document;
use Pimcore\Model\DataObject\Data\BlockElement;
use Pimcore;
use Pimcore\Model\DataObject\Demo;


class ImportCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('import:command')
            ->setDescription('Import command')
            ->addOption("file", "j",
                InputOption::VALUE_REQUIRED,
                "Define action type")
            ->addOption(
                'params',
                'p',
                InputOption::VALUE_REQUIRED,
                'JSON Encoded Params'
                );
            
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // dump
       
    
    
	$path = $input->getOptions()['file'];
            $json = file_get_contents($path);
            $data = json_decode($json);
            foreach ($data as $prod)
            {
                $product = new \Pimcore\Model\DataObject\Demo();
                $product->setKey($prod->name);
                $product->setPublished(true);
                $product->setParentId(9);
                $product->setName($prod->name);
              //  $product->setDescription($prod->description);
                $product->setSKU($prod->SKU);
              //  $product->setColour($prod->colour);
              //  $product->setSize($prod->size);
              //  $product->setStatus($prod->status);
                
              //  $image = \Pimcore\Model\Asset\Image::getByPath($prod->mainImage);
             //   $product->setImage($image);
                
                $product->save();
            }
             $this->dump('Import Succesfully!');

    }
}

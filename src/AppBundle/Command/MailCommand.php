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


	class MailCommand extends AbstractCommand
	{
	    protected function configure()
	    {
		$this
		    ->setName('mail:command')
		    ->setDescription('Mail command');
	    }
    
     protected function execute(InputInterface $input, OutputInterface $output)
    {
	$mail = new \Pimcore\Mail();
	$mail->addTo('siddharthsrivastava649@gmail.com');
	$mail->setSubject('Hey Check It Out!!!');
	$mail->setDocument('/emailTemplate');
	$mail->setBodyText("New Collections Added ");
	$mail->send();
	$this->dump("Mail sent!!!");
	
   	
   }
   }

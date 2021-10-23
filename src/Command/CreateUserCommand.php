<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;


class CreateUserCommand extends Command
{

    protected static $defaultName = 'app:random-minormax';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
        ->setDescription('This application finds 
        max and min random numbers among the random numbers you specify.')

        ->addArgument('randomNumbers',InputArgument::REQUIRED,'Array Length');
    }
    // randomNumbers Adında bir dizi oluşturup 0-1000 arası rastgele sayılarımızı bu
    // dizinin içine atıyoruz
    private function sort($randomNumbers){
        $randomNumbers = array();

        for ($i=0;$i<$randomNumbers;$i++){
            array_push($randomNumbers,rand(0,1000));
        }
        //En büyük ve en küçük sayı belirlenir
        $min = min($randomNumbers);
        $max = max($randomNumbers);
        //En büyük ve en küçük sayıyı yazdırıyor.
        print_r($randomNumbers);
        echo 'Max Number: '. $max . "\n" .'Min Number: '. $min;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->sort($input->getArgument('randomNumbers')));

        return 0;
    }
}
?>
<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Indexer\Console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for displaying information related to indexers.
 */
class IndexerInfoCommand extends AbstractIndexerCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('indexer:info')
            ->setDescription(
                'Shows allowed Indexers'
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $indexers = $this->parseIndexerString(AbstractIndexerCommand::INPUT_KEY_ALL);
        foreach ($indexers as $indexer) {
            $output->writeln(sprintf('%-40s %s', $indexer->getId(), $indexer->getTitle()));
        }
    }

    public function getOptionsList()
    {
        return [];
    }
}

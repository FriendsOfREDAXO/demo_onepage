<?php

declare(strict_types=1);

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class rex_command_demo_onepage_dumptables extends rex_console_command
{
    protected function configure(): void
    {
        $this->setDescription('Dumps the Onepage-Demo-Tables to backups/demo_onepage.utf8.sql');
        $this->addOption('yes', 'y', InputOption::VALUE_NONE, 'Overwrite existing file backups/demo_onepage.utf8.sql?');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = $this->getStyle($input, $output);

        $skipConfirmation = true === $input->getOption('yes');

        $io->title('Onepage-Demo - Dump Tables');

        if (!$input->isInteractive() && !$skipConfirmation) {
            return 1;
        }

        if (!$skipConfirmation && !$io->confirm('Current file backups/demo_onepage.utf8.sql will be overwritten. Would you like to proceed?')) {
            return 1;
        }

        $io->writeln('Run dump Onepage-Demo-Tables ...');

        $errors = rex_demo_onepage::dump_tables();

        if ([] !== $errors) {
            $io->error($this->decodeMessage("Failed to dump Onepage-Demo-Tables:\n- " . implode("\n- ", $errors)));
            return 1;
        }

        $io->success('Successfully dumped Onepage-Demo-Tables!');
        return 0;
    }
}

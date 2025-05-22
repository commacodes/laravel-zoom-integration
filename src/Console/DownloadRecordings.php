<?php

namespace Commacode\ZoomIntegration\Console;

use Illuminate\Console\Command;

class DownloadRecordings extends Command {
    protected \$signature = 'zoom:download-recordings';
    protected \$description = 'Download Zoom recordings automatically';

    public function handle() {
        // Logic to download Zoom recordings
        \$this->info('Recordings downloaded.');
    }
}

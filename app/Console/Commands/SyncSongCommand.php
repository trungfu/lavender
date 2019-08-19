<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SyncSongCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'song:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Song';

    protected $songsSyncService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        \App\Services\Media\SongsSync $songsSyncService
    )
    {
        parent::__construct();
        $this->songsSyncService = $songsSyncService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->songsSyncService->sync();
    }
}

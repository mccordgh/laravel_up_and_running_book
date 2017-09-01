<?php

namespace LaravelUpAndRunning\Console\Commands;

use Illuminate\Console\Command;

class DrawACoolGuy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'draw:coolguy
                            {name? : The name of the COOL GUY}
                            {--wavy : make the arrow wavy}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $arrowLine = $this->option('wavy') ? '~^~^~^~^' : '--------';

        $this->comment("\n");
        $this->comment(" ()\n");
        $this->comment(" /\\\\  <" . $arrowLine . " COOL GUY " . $name . "\n");
        $this->comment("  /\\\n");
        $this->comment("\n");
    }
}

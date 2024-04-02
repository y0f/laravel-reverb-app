<?php

namespace App\Console\Commands;

use App\Events\MessageSent;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class SendChatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:chat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send a message';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'whats ur fookin name?',
            required: true
        );
        $text = text(
            label: 'whats ur fookin message?',
            required: true
        );

        MessageSent::dispatch($name, $text);

    }
}

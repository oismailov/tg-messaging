<?php

namespace App\Listeners;

use App\Events;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class MessageHistory
 *
 * @package App\Listeners
 */
class MessageHistory implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'tg_history';

    /**
     * Execute the job.
     *
     * @param Events\MessageHistory $event
     *
     * @return void
     */
    public function handle(Events\MessageHistory $event): void
    {

    }
}

<?php

namespace App\Listeners;

use App\Events;
use App\Services;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class SendMessage
 *
 * @package App\Listeners
 */
class SendMessage implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue;

    /**
     * @var Services\Messaging\Messaging
     */
    private $messagingService;

    /**
     * SendMessage constructor.
     *
     * @param Services\Messaging\Messaging $messagingService
     */
    public function __construct(Services\Messaging\Messaging $messagingService)
    {
        $this->messagingService = $messagingService;
        $this->queue = config('queue.connections.sqs.queue');
    }

    /**
     * Execute the job.
     *
     * @param Events\MessageSent $event
     *
     * @return void
     */
    public function handle(Events\MessageSent $event): void
    {
        $this->messagingService->send($event->message);

        event(new Events\MessageHistory($event->message));
    }
}

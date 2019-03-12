<?php

namespace App\Events;
use App\Comment;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommentSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public $comment;

    public function __construct(User $user, Comment $comment)
    {
        $this->user = $user;

        $this->comment = $comment;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('comment');
    }
}

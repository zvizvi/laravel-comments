<?php

namespace LakM\Comments\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use LakM\Comments\Models\Comment;

class CommentDeleted
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Model is the commentable model type defined in config
     * @param  Comment  $model
     */
    public function __construct(public Comment $model)
    {
    }

}

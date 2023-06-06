<?php

namespace App\Events;

use App\Models\Language;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LanguageChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $language;
    public $type;

    public function __construct(Language $language, $type = 'add')
    {
        $this->language = $language;
        $this->type = $type;
    }

}

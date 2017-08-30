<?php

namespace Diegoalvarezb\FrontMessages;

/**
 * Trait than handles front messages to show in html.
 *
 * @package Diegoalvarezb\FrontMessages
 */
trait FrontMessagesTrait
{
    /**
     * Add a message to flash session, in order to show them in the view.
     *
     * @param  string $type
     * @param  string $message
     * @return void
     */
    protected function addHtmlMessage($type, $message)
    {
        $messageType = 'front_messages.' . $type;

        $messageList = session()->get($messageType);
        $messageList[] = $message;

        session()->flash($messageType, $messageList);
    }
}

<?php

namespace Nishchay\Generator\Skelton\Controller;

use Nishchay\Http\Request\RequestStore;

/**
 * Message controller class.
 *
 * @license     https://nishchay.io/license New BSD License
 * @copyright   (c) 2020, Nishchay PHP Framework
 * @version     1.0
 * @author      Bhavik Patel
 * @Controller
 * @Routing(prefix='message')
 */
class Message
{

    /**
     * @Route(path='/')
     * @Response(type=VIEW)
     */
    public function threadList()
    {
        return 'message/list';
    }

    /**
     * You may want to implement this for AJAX so response type is JSON.
     * 
     * @Route(path='/', type=POST)
     * @Response(type=JSON)
     */
    public function create()
    {
        // Here you can create thread along with add thread member.
        // As this skeltonas have addMember route already. You can create thread
        // here and then forward request to message/{threadId}/addMember.
        // and then to send message, forward request again to
        // message/{threadId}/send.
    }

    /**
     * List of thread.
     * 
     * @Route(path='{threadId}', type=GET)
     * @Special(threadId=number)
     * @Response(type=VIEW)
     */
    public function messageView($threadId = '@Segment(index=threadId)')
    {
        $message = "Fetch message using {$threadId}";
        RequestStore::add('message', $message);
        return 'message/view';
    }

    /**
     * You may want to implement this for AJAX so response type is JSON.
     * 
     * @Route(path='{threadId}/member', type=POST)
     * @Special(threadId=number)
     * @Response(type=JSON)
     */
    public function addMember($threadId = '@Segment(index=threadId)')
    {
        // Add Member to message thread
        # You might need following request parameter.
        /*
         * 1. thread_id 
         * 2. member_id
         * 3. is_admin
         */
    }

    /**
     * You may want to implement this for AJAX so response type is JSON.
     * 
     * @Route(path='{threadId}/member', type=DELETE)
     * @Special(threadId=number)
     * @Response(type=JSON)
     */
    public function removeMember($threadId = '@Segment(index=threadId)')
    {
        // Remove member from message thread
        # You might need following request parameter.
        /*
         * 1. thread_id
         * 2. member_id
         * 3. remove_reason
         */
    }

    /**
     * You may want to implement this for AJAX so response type is JSON.
     * 
     * @Route(path='{threadId}/leave', type=DELETE)
     * @Special(threadId=number)
     * @Response(type=JSON)
     */
    public function leave($threadId = '@Segment(index=threadId)')
    {
        // To leave specified thread.
        // This is for remove yourself from thread
    }

    /**
     * You may want to implement this for AJAX so response type is JSON.
     * 
     * @Route(path='{threadId}/send', type=POST)
     * @Special(threadId=number)
     * @Response(type=JSON)
     */
    public function send($threadId = '@Segment(index=threadId)')
    {
        // Send message to thread.
        # You might need following request parameter.
        /*
         * 1. message_content
         * 2. message_type 
         */
    }

    /**
     * Remove thread.
     * 
     * @Route(path='{threadId}', type=DELETE)
     * @Special(threadId=number)
     * @Response(type=JSON)
     */
    public function removeThread($threadId = '@Segment(index=threadId)')
    {
        
    }

    /**
     * Remove thread.
     * 
     * @Route(path='{threadId}/{messageId}', type=DELETE)
     * @Special(threadId=number,messageId=number)
     * @Response(type=JSON)
     */
    public function removeMessage($param)
    {
        
    }

    /**
     * @Route(path='{threadId}/{messageId}/read', type=PUT)
     * @Response(type=JSON)
     */
    public function markRead()
    {
        // Implement message to mark as read.
        // You can implement list of messge or thread to be marked as read.
    }

}

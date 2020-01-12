<?php
/**
 * Perforce Swarm
 *
 * @copyright   2019 Perforce Software. All rights reserved.
 * @license     Please see LICENSE.txt in top-level folder of this distribution.
 * @version     <release>/<patch>
*/

use Events\Listener\ListenerFactory as EventListenerFactory;

$listeners = [Discord\Listener\DiscordActivityListener::class];

return [
    'listeners' => $listeners,
    'service_manager' =>[
        'factories' => array_fill_keys(
            $listeners,
            Events\Listener\ListenerFactory::class
        )
    ],
    EventListenerFactory::EVENT_LISTENER_CONFIG => [
        // EventListenerFactory::TASK_COMMIT => [
        //     Discord\Listener\DiscordActivityListener::class => [
        //         [
        //             Events\Listener\ListenerFactory::PRIORITY => -110,
        //             Events\Listener\ListenerFactory::CALLBACK => 'handleCommit',
        //             Events\Listener\ListenerFactory::MANAGER_CONTEXT => 'queue'
        //         ]
        //     ]
        // ],
        EventListenerFactory::TASK_REVIEW => [
            Discord\Listener\DiscordActivityListener::class => [
                [
                    Events\Listener\ListenerFactory::PRIORITY => -110,
                    Events\Listener\ListenerFactory::CALLBACK => 'handleReview',
                    Events\Listener\ListenerFactory::MANAGER_CONTEXT => 'queue'
                ]
            ]
        ]
    ]
    // 'discord' => [
    //     'user'        => 'metabuff_one',
    //     'max_length'  => 80,
    // ]
];	
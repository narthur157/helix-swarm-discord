<?php
/**
 * Perforce Swarm
 *
 * @copyright   2019 Perforce Software. All rights reserved.
 * @license     Please see LICENSE.txt in top-level folder of this distribution.
 * @version     <release>/<patch>
*/

use Events\Listener\ListenerFactory as EventListenerFactory;

$listeners = [Discord\DiscordActivityListener::class];

return [
    'listeners' => $listeners,
    'service_manager' =>[
        'factories' => array_fill_keys(
            $listeners,
            Events\Listener\ListenerFactory::class
        )
    ],
    EventListenerFactory::EVENT_LISTENER_CONFIG => [
        EventListenerFactory::TASK_COMMIT => [
            Discord\DiscordActivityListener::class => [
                [
                    Events\Listener\ListenerFactory::PRIORITY => -110,
                    Events\Listener\ListenerFactory::CALLBACK => 'handleCommit',
                    Events\Listener\ListenerFactory::MANAGER_CONTEXT => 'queue'
                ]
            ]
        ],
        EventListenerFactory::TASK_REVIEW => [
            Discord\DiscordActivityListener::class => [
                [
                    Events\Listener\ListenerFactory::PRIORITY => -110,
                    Events\Listener\ListenerFactory::CALLBACK => 'handleReview',
                    Events\Listener\ListenerFactory::MANAGER_CONTEXT => 'queue'
                ]
            ]
        ]
    ],
    'discord' => [
        'user'        => 'Swarm',
        'icon'        =>
            'https://swarm.workshop.perforce.com/view/guest/perforce_software/discord/main/images/60x60-Helix-Bee.png',
        'max_length'  => 80,
    ]
];	
<?php
/**  
 * Perforce Swarm
 *
 * @copyright   2019 Perforce Software. All rights reserved.
 * @license     Please see LICENSE.txt in top-level folder of this distribution.
 * @version     <release>/<patch>
*/

namespace Discord;

class Module
{
    public function onBootstrap(Event $event)
    {
        $logger = $this->services->get('logger');
        
        if ($logger) {
            $logger->info("Discord Module Bootstrap");
        }
    }

    // public function getConfig()
    // {
    //     return include __DIR__ . '/config/module.config.php';
    // }
}
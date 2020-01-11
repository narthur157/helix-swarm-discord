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

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
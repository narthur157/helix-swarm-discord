
<?php
/**  
 * Perforce Swarm
 *
 * @copyright   2019 Perforce Software. All rights reserved.
 * @license     Please see LICENSE.txt in top-level folder of this distribution.
 * @version     <release>/<patch>
*/
namespace Discord\Listener;

use Events\Listener\AbstractEventListener;
use P4\Spec\Change;
use P4\Spec\Exception\NotFoundException;
use Reviews\Model\Review;
use Zend\EventManager\Event;
use Zend\Http\Client;
use Zend\Http\Request;

class DiscordActivityListener extends AbstractEventListener
{
    public function handleReview(Event $event)
    {
        /*
        $logger = $this->services->get('logger');
        $logger->info("Discord: handleReview");
        $p4Admin = $this->services->get('p4_admin');
        try {
            $review = Review::fetch($event->getParam('id'), $p4Admin);

            // URL to POST messages to Discord
            $url = file_get_contents('./discordUrl.txt', true);
            // Construct your Discord Review message here
            $text = 'Review ' . $review->getId();
            $this->postDiscord($url, $text);
        } catch (\Exception $e) {
            $logger->err("Discord:" . $e->getMessage());
            return;
        }
        $logger->info("Discord: handleReview end.");*/
    }

    public function handleCommit(Event $event)
    {
        /*
        // connect to all tasks and write activity data
        // we do this late (low-priority) so all handlers have
        // a chance to influence the activity model.
        $logger = $this->services->get('logger');
        $logger->info("Discord: handleCommit");

        // task.change doesn't include the change object; fetch it if we need to
        $p4Admin = $this->services->get('p4_admin');
        $change  = $event->getParam('change');
        if (!$change instanceof Change) {
            try {
                $change = Change::fetchById($event->getParam('id'), $p4Admin);
                $event->setParam('change', $change);
            } catch (NotFoundException $e) {
            } catch (\InvalidArgumentException $e) {
            }
        }

        // if this isn't a submitted change; nothing to do
        if (!$change instanceof Change || !$change->isSubmitted()) {
            $logger->info("Discord: not a change...");
            return;
        }
        try {
            // URL to POST messages to Discord
            $url = file_get_contents('./discordUrl.txt', true);
            // Construct your Discord Commit message here
            $text = 'Review ' . $change->getId();
            $this->postDiscord($url, $text);
        } catch (\Exception $e) {
            $logger->err('Discord: ' . $e->getMessage());
        }
        $logger->info("Discord: handleCommit end.");*/
    }

    private function postDiscord($url, $msg)
    {
        /*
        $logger = $this->services->get('logger');
        $config = $this->services->get('config');

        $logger->info("Discord: POST to $url");

        try {

            $request = new Request();
            $request->setMethod(Request::METHOD_POST);
            $request->setUri($url);
            $request->setContent('content=' + $msg);

            $client = new Client();

            // set the http client options; including any special overrides for our host
            $options = $config + ['http_client_options' => []];
            $options = (array) $options['http_client_options'];
            if (isset($options['hosts'][$client->getUri()->getHost()])) {
                $options = (array) $options['hosts'][$client->getUri()->getHost()] + $options;
            }
            unset($options['hosts']);
            $client->setOptions($options);

            // POST request
            $response = $client->dispatch($request);

            if (!$response->isSuccess()) {
                $logger->err(
                    'Discord failed to POST resource: ' . $url . ' (' .
                    $response->getStatusCode() . " - " . $response->getReasonPhrase() . ').',
                    [
                        'request'   => $client->getLastRawRequest(),
                        'response'  => $client->getLastRawResponse()
                    ]
                );
                return false;
            }
            return true;

        } catch (\Exception $e) {
            $logger->err($e);
        }
        return true;*/
    }
}
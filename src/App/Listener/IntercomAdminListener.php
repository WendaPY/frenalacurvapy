<?php

/**
 * Ushahidi Intercom Listener
 *
 * Listens for new posts that are added to a set
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\App\Listener;

use League\Event\AbstractListener;
use League\Event\EventInterface;
use Intercom\IntercomClient;
use GuzzleHttp\Exception\ClientException;
use Ushahidi\App\Multisite\UsesSiteInfo;

class IntercomAdminListener extends AbstractListener
{
    use UsesSiteInfo;

    public function handle(EventInterface $event, $user = null)
    {
        if ($user && $user->role === 'admin') {
            $intercomAppToken = getenv('INTERCOM_APP_TOKEN');
            $domain = $this->getSite()->getBaseUri();
            $company = [
                "company_id" => $domain
            ];

            if ($intercomAppToken && !empty($domain)) {
                $client = new IntercomClient($intercomAppToken, null);

                try {
                    $intercom_user = [
                        "email" => $user->email,
                        "created_at" => $user->created,
                        "user_id" => $domain . '_' . $user->id,
                        "name" => $user->realname,
                        "companies" => [
                            $company
                        ],
                        "custom_attributes" => [
                            "last_login" => $user->last_login,
                            "logins" => $user->logins,
                            "role" => $user->role,
                            "language" => $user->language,
                        ]
                    ];

                    $client->users->update($intercom_user);
                } catch (ClientException $e) {
                    \Log::info($e->getMessage());
                }
            }
        }
    }
}

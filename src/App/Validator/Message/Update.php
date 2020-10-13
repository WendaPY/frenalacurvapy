<?php

/**
 * Ushahidi Message Validator
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\App\Validator\Message;

use Ushahidi\Core\Entity;
use Ushahidi\Core\Entity\RoleRepository;
use Ushahidi\App\Validator\LegacyValidator;
use Ushahidi\Core\Usecase\Message\UpdateMessageRepository;

class Update extends LegacyValidator
{
    protected $repo;
    protected $default_error_source = 'message';

    public function __construct(UpdateMessageRepository $repo)
    {
        $this->repo = $repo;
    }

    protected function getRules()
    {
        return [
            'status' => [
                [[$this->repo, 'checkStatus'], [':value', $this->validation_engine->getFullData('direction')]]
            ]
        ];
    }
}

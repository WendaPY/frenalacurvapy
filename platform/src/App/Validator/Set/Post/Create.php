<?php

/**
 * Ushahidi Set Validator
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\App\Validator\Set\Post;

use Ushahidi\App\Validator\LegacyValidator;
use Ushahidi\Core\Entity\PostRepository;

class Create extends LegacyValidator
{
    protected $post_repo;
    protected $default_error_source = 'set';

    public function __construct(PostRepository $post_repo)
    {
        $this->post_repo = $post_repo;
    }

    protected function getRules()
    {
        return [
            'id' => [
                ['not_empty'],
                ['digit'],
                [[$this->post_repo, 'exists'], [':value']],
            ],
        ];
    }
}

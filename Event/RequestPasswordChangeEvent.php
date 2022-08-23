<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Bundle\UserBundle\Event;

use CoreShop\Component\User\Model\UserInterface;
use Symfony\Contracts\EventDispatcher\Event;

final class RequestPasswordChangeEvent extends Event
{
    public function __construct(private UserInterface $user, private string $resetLink)
    {
    }

    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function getResetLink(): string
    {
        return $this->resetLink;
    }
}

<?php
/*
 * This file is part of prooph/proophessor.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Date: 5/2/15 - 8:33 PM
 */
namespace Prooph\ProophessorDo\Container\Model\User;

use Interop\Container\ContainerInterface;
use Prooph\ProophessorDo\Model\User\Handler\GetAllUsersHandler;
use Prooph\ProophessorDo\Projection\User\UserFinder;

/**
 * @author Bruno Galeotti <bgaleotti@gmail.com>
 */
final class GetAllUsersHandlerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return GetAllUsersHandler
     */
    public function __invoke(ContainerInterface $container)
    {
        return new GetAllUsersHandler($container->get(UserFinder::class));
    }
}

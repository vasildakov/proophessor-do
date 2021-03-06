<?php
/*
 * This file is part of prooph/proophessor.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\ProophessorDo\Model\Todo\Query;

/**
 * @author Bruno Galeotti <bgaleotti@gmail.com>
 */
final class GetTodoById
{
    /**
     * @var string
     */
    private $todoId;

    /**
     * @param string $todoId
     */
    public function __construct($todoId)
    {
        $this->todoId = $todoId;
    }

    /**
     * @return string
     */
    public function todoId()
    {
        return $this->todoId;
    }
}

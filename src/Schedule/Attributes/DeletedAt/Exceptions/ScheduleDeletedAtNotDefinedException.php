<?php

namespace Railken\LaraOre\Schedule\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Schedule\Exceptions\ScheduleAttributeException;

class ScheduleDeletedAtNotDefinedException extends ScheduleAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SCHEDULE_DELETED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}

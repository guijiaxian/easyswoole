<?php
/**
 * Created by PhpStorm.
 * User: Tioncico
 * Date: 2020/4/7 0007
 * Time: 15:51
 */

namespace EasySwoole\EasySwoole\Bridge\CommandHandel;


use EasySwoole\EasySwoole\Bridge\BridgeCommand;
use EasySwoole\EasySwoole\Task\TaskManager;

class Task extends Base
{
    static function initCommand(BridgeCommand $command)
    {
        $command->set(BridgeCommand::TASK_INFO, [Task::class,'info']);
    }

    static function info()
    {
        return TaskManager::getInstance()->status();
    }

}
<?php
/**
 * Created by PhpStorm.
 * File: PHPGitInterface.php.
 * Created: bigtows.
 * Created date: 13/09/2017  22:59
 * Description:
 */

namespace Library\PHPGit;


interface PHPGitInterface {

    const COMMAND_NAME = "git";

    const COMMAND_BRANCH = self::COMMAND_NAME . " branch";

    const COMMAND_CHECKOUT = self::COMMAND_NAME." checkout ";

    function __construct(string $workSpace);

    function getBranches(): GitBranches;

}
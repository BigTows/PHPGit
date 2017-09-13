<?php
/**
 * Created by PhpStorm.
 * File: GitBranchInterface.php.
 * Created: bigtows.
 * Created date: 13/09/2017  23:09
 * Description:
 */

namespace Library\PHPGit;



interface GitBranchInterface {
    function __construct(string $name,$isCurrent = false);
    function getName();

}
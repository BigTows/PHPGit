<?php
/**
 * Created by PhpStorm.
 * File: GitBranchesInterface.php.
 * Created: bigtows.
 * Created date: 13/09/2017  23:20
 * Description:
 */

namespace Library\PHPGit;


interface GitBranchesInterface {

    function __construct(array $branches);


    function getBranchByName(string $name): GitBranch;

    function getCurrentBranch(): GitBranch;


    function getAll(): array;
}
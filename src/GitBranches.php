<?php
/**
 * Created by PhpStorm.
 * File: GitBranches.php.
 * Created: bigtows.
 * Created date: 13/09/2017  23:20
 * Description:
 */

namespace Library\PHPGit;

use Library\PHPGit\Exception\PHPGitException;


require "Exception/PHPGitException.php";
require "GitBranch.php";
require "GitBranchesInterface.php";

class GitBranches implements GitBranchesInterface {

    /**
     * @var GitBranch[]
     */
    private $store = [];

    public function __construct(array $branches) {
        foreach ($branches as $branch) {
            array_push($this->store, new GitBranch(substr($branch, 2, strlen($branch)), $this->isCurrent($branch)));
        }
    }

    function getBranchByName(string $name): GitBranch {
        foreach ($this->store as $branch) {
            if ($branch->getName() == $name) {
                return $branch;
            }
        }
        throw new PHPGitException(PHPGitException::BRANCH_BAD_NAME);
    }

    function getCurrentBranch(): GitBranch {
        foreach ($this->store as $branch) {
            if ($branch->isCurrent()) {
                return $branch;
            }
        }
        return null;
    }

    function getAll(): array {
        return $this->store;
    }

    private function isCurrent(string $nameBranch): bool {
        return $nameBranch[0] == "*";
    }
}
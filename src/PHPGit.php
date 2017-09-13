<?php
/**
 * Created by PhpStorm.
 * File: PHPGit.php.
 * Created: bigtows.
 * Created date: 13/09/2017  22:57
 * Description:
 */

namespace Library\PHPGit;

require "PHPGitInterface.php";
require "GitBranches.php";

class PHPGit implements PHPGitInterface {
    private $workSpace;

    private $gitBranches;


    function __construct(string $workSpace) {
        $this->setWorkSpace($workSpace);
        chdir($this->getWorkSpace());
        $this->initBranches();
    }


    private function initBranches() {
        $branches = [];
        exec(self::COMMAND_BRANCH, $branches);
        $this->gitBranches = new GitBranches($branches);
    }


    function getBranches(): GitBranches {
        return $this->gitBranches;
    }


    function changeBranch(GitBranch $branch){
        exec(self::COMMAND_CHECKOUT.$branch->getName());
        $this->initBranches();
    }


    /**
     * Return workspace
     * @return string
     */
    public function getWorkSpace(): string {
        return $this->workSpace;
    }

    /**
     * @param string $workSpace
     */
    public function setWorkSpace(string $workSpace) {
        $this->workSpace = $workSpace;
    }


}

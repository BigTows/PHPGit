<?php
/**
 * Created by PhpStorm.
 * File: GitBranch.php.
 * Created: bigtows.
 * Created date: 13/09/2017  23:09
 * Description:
 */

namespace Library\PHPGit;

require "GitBranchInterface.php";

class GitBranch implements GitBranchInterface {

    private $nameBranch;
    private $isCurent;

    public function __construct(string $name, $isCurrent = false) {
        $this->nameBranch = $name;
        $this->isCurent = $isCurrent;
    }

    function getName() {
        return $this->nameBranch;
    }

    function isCurrent(){
        return $this->isCurent;
    }


}
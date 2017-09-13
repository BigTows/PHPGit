<?php
/**
 * Created by PhpStorm.
 * File: index.php.
 * Created: bigtows.
 * Created date: 13/09/2017  22:56
 * Description:
 */
require "../src/PHPGit.php";

$project = new \Library\PHPGit\PHPGit("/Users/bigtows/Projects/AirDrop");
echo "Before: ". $project->getBranches()->getCurrentBranch()->getName()."<br>";
$master = $project->getBranches()->getBranchByName("master");

$project->changeBranch($master);

echo "After: ".$project->getBranches()->getCurrentBranch()->getName();
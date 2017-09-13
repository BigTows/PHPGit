<?php
/**
 * Created by PhpStorm.
 * File: PHPGitException.php.
 * Created: bigtows.
 * Created date: 13/09/2017  23:43
 * Description:
 */

namespace Library\PHPGit\Exception;


use Throwable;

class PHPGitException extends \Exception {

    const BRANCH_BAD_NAME = "Bad name Branch";

    public function __construct($message = "", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
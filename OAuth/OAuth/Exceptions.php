<?php

/**
* see LICENSE
*/
namespace OAuth\Exceptions;

final class IncompleteAttributeException extends \Exception {
    protected $message = "Insufficient or incomplete attributes: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class ServiceException extends \Exception {
    protected $message = "The request can't be serviced properly: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class NoAuthException extends \Exception {
    protected $message = "Authorization request is denied: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class AccessDeniedException extends \Exception {
    protected $message = "Access to requested resource is denied: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class InvalidResourceServerException extends \Exception {
    protected $message = "No such resource server is registered with this authorization server: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class InvalidClientException extends \Exception {
    protected $message = "No such client is registered with this authorization server: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
final class InvalidScopeException extends \Exception {
    protected $message = "No such scope is supported by the resource server: ";
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
        $this->message .= $message;
    }
}
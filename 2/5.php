<?php
class SessionManager {
    public function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function setSession($key, $value) {
        $_SESSION[$key] = $value;
    }
    public function getSession($key) {
        return $_SESSION[$key] ?? null;
    }
    public function destroySession() {
        session_unset();
        session_destroy();
        print("Session Destroy!!!");
    }
}

$session = new SessionManager();
$session->startSession();
$session->setSession("country", "Japan");
print("Your Country: {$session->getSession("country")}<br>");
$session->destroySession();
?>

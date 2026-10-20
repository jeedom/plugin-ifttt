<?php
// Minimal Jeedom boundary for testing the real plugin event method offline.
class eqLogic {}
class cmd {
    public static $commands = array();
    public $value;
    public $allowInteraction = true;
    public static function byId($id) { return isset(self::$commands[$id]) ? self::$commands[$id] : null; }
    public function event($value) { $this->value = $value; }
    public function getType() { return 'info'; }
    public function getSubType() { return 'string'; }
    public function getConfiguration($key) { return $key === 'interact::allow' && $this->allowInteraction; }
}
class interactQuery {
    public static $calls = array();
    public static function tryToReply($text, $parameters) { self::$calls[] = array($text, $parameters); }
}
function init($key) { return isset($_GET[$key]) ? $_GET[$key] : ''; }

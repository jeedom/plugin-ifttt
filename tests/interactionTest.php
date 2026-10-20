<?php
// Standalone regression test: php tests/interactionTest.php
$root = sys_get_temp_dir() . '/ifttt-test-' . bin2hex(random_bytes(8));
$classDir = $root . '/plugins/ifttt/core/class';
mkdir($classDir, 0700, true);
mkdir($root . '/core/php', 0700, true);
copy(__DIR__ . '/fixtures/coreStub.php', $root . '/core/php/core.inc.php');
copy(__DIR__ . '/../core/class/ifttt.class.php', $classDir . '/ifttt.class.php');
set_error_handler(function ($level, $message, $file, $line) {
    throw new ErrorException($message, 0, $level, $file, $line);
});
function expectIfttt($condition, $message) {
    if (!$condition) throw new RuntimeException($message);
}
try {
    require $classDir . '/ifttt.class.php';
    $command = new iftttCmd();
    cmd::$commands[1] = $command;
    foreach (array('Hello', '  Température de la pièce  ', '日本語 🌡️', '0') as $value) {
        interactQuery::$calls = array();
        $_GET = array('id' => 1, 'value' => $value);
        ifttt::event();
        expectIfttt($command->value === $value, 'Event value must remain unchanged');
        expectIfttt(interactQuery::$calls === array(array(trim($value), array('plugin' => 'ifttt'))), 'Interaction must receive trimmed, unchanged UTF-8');
    }
    $command->allowInteraction = false;
    interactQuery::$calls = array();
    ifttt::event();
    expectIfttt(interactQuery::$calls === array(), 'Disabled interactions must not be called');
    $_GET['id'] = 999;
    try {
        ifttt::event();
        throw new RuntimeException('Unknown command was accepted');
    } catch (Exception $e) {
        expectIfttt(strpos($e->getMessage(), 'Commande ID ifttt inconnu') === 0, 'Unknown command rejection');
    }
    echo "PASS: ASCII, accented UTF-8, multilingual text, disabled interaction and unknown command\n";
} finally {
    restore_error_handler();
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($iterator as $entry) {
        if ($entry->isDir()) rmdir($entry->getPathname()); else unlink($entry->getPathname());
    }
    rmdir($root);
}

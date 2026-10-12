<?php

header('Access-Control-Allow-Origin: http://localhost:1313');
header('Content-Type: application/json; charset=utf-8');

function respond(int $status, string $message): void
{
    http_response_code($status);
    echo json_encode(['message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, 'Nur POST erlaubt.');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    $name === '' ||
    strlen($name) > 100 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    strlen($email) > 254 ||
    $message === '' ||
    strlen($message) > 5000
) {
    respond(400, 'Bitte überprüfe deine Eingaben.');
}

try {
    $db = new PDO(
        'mysql:host=' . getenv('DB_HOST') .
        ';dbname=' . getenv('DB_NAME') .
        ';charset=utf8mb4',
        getenv('DB_USER'),
        getenv('DB_PASSWORD'),
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $statement = $db->prepare(
        'INSERT INTO contact_messages (name, email, message)
         VALUES (?, ?, ?)'
    );

    $statement->execute([$name, $email, $message]);

    respond(201, 'Deine Nachricht wurde gespeichert!');
} catch (PDOException $e) {
    respond(500, 'Speichern fehlgeschlagen.');
}
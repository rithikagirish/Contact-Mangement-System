<?php
require_once 'config.php';
$id = (int)($_GET['id'] ?? 0);
$stmt = $conn->prepare("DELETE FROM contacts WHERE ContactID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: view_contacts.php?msg=" . urlencode("Contact deleted."));
exit;
?>
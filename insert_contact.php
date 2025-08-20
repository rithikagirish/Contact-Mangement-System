<?php
require_once 'config.php';

$firstName = trim($_POST['firstName'] ?? '');
$lastName  = trim($_POST['lastName'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$email     = trim($_POST['email'] ?? '');


if ($firstName === '' || $lastName === '') {
  header("Location: add_contact.php?error=" . urlencode("First and Last Name are required."));
  exit;
}

$stmt = $conn->prepare("INSERT INTO contacts (FirstName, LastName, PhoneNumber, Email) VALUES (?, ?, ?, ?)");
if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("ssss", $firstName, $lastName, $phone, $email);
$stmt->execute();

header("Location: view_contacts.php?msg=" . urlencode("Contact added successfully."));
exit;

?>
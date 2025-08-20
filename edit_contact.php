<?php
require_once 'config.php';
$id = (int)($_GET['id'] ?? 0);

$stmt = $conn->prepare("SELECT ContactID, FirstName, LastName, PhoneNumber, Email FROM contacts WHERE ContactID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if (!$row = $result->fetch_assoc()) {
  header("Location: view_contacts.php?msg=" . urlencode("Contact not found."));
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstname  = trim($_POST['firstName'] ?? '');
  $lastname  = trim($_POST['lastName'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $email = trim($_POST['email'] ?? '');
  if ($firstname === '') {
    $error = "Name is required.";
  } else {
    $up = $conn->prepare("UPDATE contacts SET FirstName=?, LastName=?, PhoneNumber=?, Email=? WHERE ContactID=?");
    $up->bind_param("ssssi", $firstname, $lastname, $phone, $email, $id);
    $up->execute();
    header("Location: view_contacts.php?msg=" . urlencode("Contact updated."));
    exit;
  }
}

$PAGE_TITLE = "Edit Contact";
include 'header.php';
?>
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card card-shadow">
      <div class="card-body">
        <h1 class="h4 mb-3"><i class="bi bi-pencil-square"></i> Edit contact</h1>
        <?php if (!empty($error)): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= h($error) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <form method="post">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">First Name *</label>
              <input type="text" class="form-control" name="firstName" value="<?= h($row['FirstName']) ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name *</label>
              <input type="text" class="form-control" name="lastName" value="<?= h($row['LastName']) ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone</label>
              <input type="text" class="form-control" name="phone" value="<?= h($row['PhoneNumber']) ?>">
            </div>
            <div class="col-md-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?= h($row['Email']) ?>">
            </div>
          </div>
          <div class="mt-3 d-flex gap-2">
            <button class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
            <a href="view_contacts.php" class="btn btn-outline-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
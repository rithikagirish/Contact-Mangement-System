<?php
require_once 'config.php';
$res = $conn->query("SELECT ContactID, FirstName, LastName, PhoneNumber, Email FROM contacts ORDER BY ContactID DESC");
$PAGE_TITLE = "View Contacts";
include 'header.php';
?>
<?php if (!empty($_GET['msg'])): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= h($_GET['msg']) ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h4 mb-0"><i class="bi bi-people"></i> All Contacts</h1>
  <a href="add_contact.php" class="btn btn-primary"><i class="bi bi-person-plus"></i> Add Contact</a>
</div>
<div class="card card-shadow">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr>
          <th>First Name</th>
          <th>Last Name </th>
          <th>Phone</th>
          <th>Email</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($res && $res->num_rows): while($row = $res->fetch_assoc()): ?>
          <tr>
            <td><?= h($row['FirstName']) ?></td>
            <td><?=h($row['LastName'])?></td>
            <td><?= h($row['PhoneNumber']) ?></td>
            <td><?= h($row['Email']) ?></td>
            <td class="text-end">
              <a href="edit_contact.php?id=<?= (int)$row['ContactID'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
              <a href="delete_contact.php?id=<?= (int)$row['ContactID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this contact?');"><i class="bi bi-trash"></i> Delete</a>
            </td>
          </tr>
        <?php endwhile; else: ?>
          <tr><td colspan="4" class="text-center text-muted py-4">No contacts yet.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'footer.php'; ?>
<?php
require_once 'config.php';
$q = trim($_GET['q'] ?? '');
$like = "%" . $q . "%";
$stmt = $conn->prepare("SELECT ContactID, FirstName, LastName, PhoneNumber, Email FROM contacts WHERE FirstName LIKE ? OR LastName LIKE ? OR PhoneNumber LIKE ? OR Email LIKE ? ORDER BY FirstName ASC");
$stmt->bind_param("ssss", $like, $like, $like, $like);
$stmt->execute();
$res = $stmt->get_result();

$PAGE_TITLE = "Search Results";
include 'header.php';
?>
<h1 class="h4 mb-3">Results for "<span class="text-primary"><?= h($q) ?></span>"</h1>
<div class="card card-shadow">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th>First Name</th>
          <th> Last Name</th>
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
          <tr><td colspan="4" class="text-center text-muted py-4">No matches found.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'footer.php'; ?>
<?php $PAGE_TITLE = "Add Contact"; include 'header.php'; ?>
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card card-shadow">
      <div class="card-body">
        <h1 class="h4 mb-3"><i class="bi bi-person-plus"></i> Add a new contact</h1>
        <?php if (!empty($_GET['error'])): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= h($_GET['error']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <form action="insert_contact.php" method="post">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">First Name *</label>
              <input type="text" class="form-control" name="firstName" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name *</label>
              <input type="text" class="form-control" name="lastName" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-md-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>
          <div class="mt-3 d-flex gap-2">
            <button class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
            <a href="view_contacts.php" class="btn btn-outline-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
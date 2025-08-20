<?php $PAGE_TITLE = "Home • Contact Manager"; include 'header.php'; ?>
<div class="p-4 p-md-5 mb-4 bg-light rounded-3 card-shadow">
  <div class="container-fluid py-5">
    <h1 class="display-6 fw-bold">Manage your contacts with ease</h1>
    <p class="col-md-8 fs-5 text-muted">Add, edit, delete and search your contacts!</p>
    <a href="add_contact.php" class="btn btn-primary btn-lg me-2"><i class="bi bi-person-plus"></i> Add Contact</a>
    <a href="view_contacts.php" class="btn btn-outline-secondary btn-lg me-2"><i class="bi bi-people"></i> View Contacts</a>
    <a href="search_contacts.php" class="btn btn-outline-dark btn-lg"><i class="bi bi-search"></i> Search</a>
  </div>
</div>

<div class="row g-3">
  <div class="col-md-4">
    <div class="card card-shadow h-100">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-plus-circle"></i> Quick Add</h5>
        <form action="insert_contact.php" method="post">
          <div class="mb-2">
            <label class="form-label">First Name *</label>
            <input type="text" class="form-control" name="firstName" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Last Name *</label>
            <input type="text" class="form-control" name="lastName" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <button class="btn btn-primary w-100">Add</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card card-shadow h-100">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-stars"></i> Tips</h5>
        <ul class="mb-0">
          <li>Use the <strong>Search</strong> page to find contacts quickly.</li>
          <li>Click <strong>Edit</strong> or <strong>Delete</strong> on the contacts table to manage records.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
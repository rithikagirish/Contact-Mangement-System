
<?php if (!isset($PAGE_TITLE)) { $PAGE_TITLE = "Contact Manager"; } ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($PAGE_TITLE) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body { background-color: #f8f9fa; }
      .card-shadow { box-shadow: 0 .5rem 1rem rgba(0,0,0,.05); }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand fw-semibold" href="index.php"><i class="bi bi-journal-bookmark"></i> Contact Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="add_contact.php"><i class="bi bi-person-plus"></i> Add Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="view_contacts.php"><i class="bi bi-people"></i> View Contacts</a></li>
            <li class="nav-item"><a class="nav-link" href="search_contacts.php"><i class="bi bi-search"></i> Search</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">

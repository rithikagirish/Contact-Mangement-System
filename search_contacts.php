<?php $PAGE_TITLE = "Search Contacts"; include 'header.php'; ?>
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card card-shadow">
      <div class="card-body">
        <h1 class="h4 mb-3"><i class="bi bi-search"></i> Search</h1>
        <form action="search_results.php" method="get" class="input-group">
          <input type="text" class="form-control" name="q" placeholder="Search by name, phone, or email..." required>
          <button class="btn btn-primary"><i class="bi bi-search"></i> Search</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
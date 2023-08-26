<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style-new-job.css">
  <title>Form Design</title>
</head>

<body>
  <div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
      <h1 class="display-6">Job Details</h1>
    </header>
  </div>
  <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3" action="new-job-info.php" method="post">
    
      <div class="col-12">
        <label for="validationDefault02" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="validationDefault02" required>
      </div>
      <div class="col-12">
        <label for="inputLocation" class="form-label">Location</label>
        <input type="text" class="form-control" id="inputLocation" name="location">
      </div>
      <div class="col-12">
        <label for="inputLocation" class="form-label">Subject</label>
        <input type="text" class="form-control" id="inputLocation" name="subject">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Salary in Taka</label>
        <input type="text" class="form-control" id="inputAddress2" name="salary">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="inputAddress2" name="contact">
      </div>
      <div class="col-12">
        <label for="feedback">Description</label><br>
        <textarea id="feedback" name="description" rows="5" cols="95" placeholder="Enter your description here"></textarea>

      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">POST</button>
      </div>
    </form>
  </section>
</body>

</html>
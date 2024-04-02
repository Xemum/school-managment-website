<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Grade</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href="../logo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
      <?php include(VIEWS . 'inc' . DS . 'adminNav.php'); ?>

      <div class="container mt-5">
            <a href="#" class="btn btn-dark">Add New Grade</a>

            <div class="alert alert-danger mt-3 n-table" role="alert">
                  Dummy error message
            </div>

            <div class="alert alert-info mt-3 n-table" role="alert">
                  Dummy success message
            </div>

            <div class="table-responsive">
                  <table class="table table-bordered mt-3 n-table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <th scope="row">1</th>
                                    <td>Grade A</td>
                                    <td>
                                          <a href="#" class="btn btn-warning">Edit</a>
                                          <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                              </tr>
                              <tr>
                                    <th scope="row">2</th>
                                    <td>Grade B</td>
                                    <td>
                                          <a href="#" class="btn btn-warning">Edit</a>
                                          <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>

            <div class="alert alert-info .w-450 m-5" role="alert">
                  Empty!
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
            $(document).ready(function() {
                  $("#navLinks li:nth-child(4) a").addClass('active');
            });
      </script>
</body>

</html>
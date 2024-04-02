<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Teachers</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href="../logo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
      <?php include(VIEWS . 'inc' . DS . 'adminNav.php'); ?>

      <div class="container mt-5">
            <a href="#" class="btn btn-dark">Add New Teacher</a>

            <form action="#" class="mt-3 n-table" method="get">
                  <div class="input-group mb-3">
                        <input type="text" class="form-control" name="searchKey" placeholder="Search...">
                        <button class="btn btn-primary">
                              <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                  </div>
            </form>

            <div class="alert alert-info mt-3 n-table" role="alert">
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
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td><a href="#">John</a></td>
                                    <td>Doe</td>
                                    <td>johndoe</td>
                                    <td>Math, Science</td>
                                    <td>Grade 10 - A, Grade 11 - B</td>
                                    <td>
                                          <a href="#" class="btn btn-warning">Edit</a>
                                          <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                              </tr>
                              <tr>
                                    <th scope="row">2</th>
                                    <td>2</td>
                                    <td><a href="#">Jane</a></td>
                                    <td>Smith</td>
                                    <td>janesmith</td>
                                    <td>English, History</td>
                                    <td>Grade 9 - A, Grade 12 - B</td>
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
                  $("#navLinks li:nth-child(2) a").addClass('active');
            });
      </script>
</body>

</html>
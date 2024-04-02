<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Messages</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href="../logo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
      <?php include(VIEWS . 'inc' . DS . 'adminNav.php'); ?>

      <div class="container mt-5" style="width: 90%; max-width: 700px;">
            <h4 class="text-center p-3">Inbox</h4>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                    Sender Name 1
                              </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                    Message content goes here.

                                    <div class="d-flex mb-3">
                                          <div class="p-2">Email: <b>sender1@example.com</b></div>
                                          <div class="ms-auto p-2">Date: 2024-04-01</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                    Sender Name 2
                              </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                    Message content goes here.

                                    <div class="d-flex mb-3">
                                          <div class="p-2">Email: <b>sender2@example.com</b></div>
                                          <div class="ms-auto p-2">Date: 2024-04-01</div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <div class="alert alert-info .w-450 m-5" role="alert">
                  Empty!
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
            $(document).ready(function() {
                  $("#navLinks li:nth-child(9) a").addClass('active');
            });
      </script>
</body>

</html>
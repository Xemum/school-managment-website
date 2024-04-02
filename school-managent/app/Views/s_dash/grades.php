<?php

function calculateGrade($score)
{
      list($numerator, $denominator) = explode("/", $score);
      $percentage = ($numerator / $denominator) * 100;

      if ($percentage >= 90) {
            return 'A+';
      } elseif ($percentage >= 80) {
            return 'A';
      } elseif ($percentage >= 70) {
            return 'B';
      } elseif ($percentage >= 60) {
            return 'C';
      } elseif ($percentage >= 50) {
            return 'D';
      } else {
            return 'F';
      }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Student - Grade Summary</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="icon" href="path/to/your/logo">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

      <?php require(VIEWS . 'inc' . DS . 'nav.php'); ?>
      <div class="d-flex justify-content-center align-items-center flex-column pt-4">
            <div class="table-responsive" style="width: 90%; max-width: 700px;">

                  <?php if (!empty($grades)) : ?>
                        <?php foreach ($grades as $gradeArray) : ?>
                              <?php foreach ($gradeArray as $grade) : ?>
                                    <table class="table table-bordered mt-1 mb-5 n-table">
                                          <caption style="caption-side:top">Year - <?= $grade['year'] ?></caption>
                                          <thead>
                                                <tr>
                                                      <th scope="col">Course Code</th>
                                                      <th scope="col">Course Title</th>
                                                      <th scope="col">Results</th>
                                                      <th scope="col">Total</th>
                                                      <th scope="col">Grade</th>
                                                      <th scope="col">Semester</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                      <td><?= $grade['subject_info']['subject_code'] ?></td>
                                                      <td><?= $grade['subject_info']['subject'] ?></td>
                                                      <td>
                                                            <?php
                                                            $results = explode(',', $grade["results"]);
                                                            $total = 0;
                                                            $outof = 0;
                                                            foreach ($results as $result) {
                                                                  $arr = explode(' ', $result);
                                                                  $total += $arr[0];
                                                                  $outof += $arr[1];
                                                                  echo '<small class="border p-1">' . $result . '</small>&nbsp;';
                                                            }
                                                            ?>
                                                      </td>
                                                      <td><?= $total ?>/<?= $outof ?></td>
                                                      <td><?= calculateGrade($total . '/' . $outof) ?></td>
                                                      <td><?= $grade['semester'] ?></td>
                                                </tr>
                                          </tbody>
                                    </table>
                              <?php endforeach; ?>
                        <?php endforeach; ?>
                  <?php else : ?>
                        <div class="alert alert-info w-450 m-5" role="alert">Empty!</div>
                  <?php endif; ?>

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
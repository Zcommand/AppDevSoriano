<?php
/**
 * @var mysqli_result $result Quesry result
 */


require('fetch_students.php');

// echo "<pre>";
// var_dump($result);
// echo "</pre>";
// die();

$title = "Students List";
?>

<?php require('include/header.php'); ?>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>List of Registered Students</h2>
            <a href="registration.php" class="btn btn-success">+ Register New Student</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bodered table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Year Level</th>
                            <th>Status</th>
                            <th>Registration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        while($row = mysqli_fetch_assoc($result)):
                        // foreach($result as $row):
                        ?>
                        <tr>
                            <td><?= $counter++; ?></td>
                            <td>
                                <?php if($row['photo']): ?>
                                    <img src="uploads\<?= $row['photo'] ?>" width="50px" height="50px" alt="Student Photo" class="rounded-circle object-fit-cover">
                                <?php else:?>
                                    <span class="text-muted">No Photo</span>
                                <?php endif;?>
                            </td>
                            <td><?= $row['student_id']; ?></td>
                            <td><?= $row['first_name']; ?></td>
                            <td><?= $row['last_name']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['year_level']; ?></td>
                            <td>
                                <?php if($row['is_confirmed']): ?>
                                    <span class="badge bg-success">Confirmed</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $row['date_created']; ?></td>
                        </tr>
                        <?php
                        endwhile;
                        // endfor;

                        // Check if table has no records yet
                        if(mysqli_num_rows($result) == 0):
                        ?>
                        <tr>
                            <td colspan="8" class="text-center text-muted">No students registered yet...</td>
                        </tr>
                        <?php
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

<?php require('include/footer.php'); ?>
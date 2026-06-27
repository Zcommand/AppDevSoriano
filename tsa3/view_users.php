<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

require("fetch_users.php");

$title = "View Users";
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="text-primary mb-0">Registered Users</h3>

    <div class="button-row">
        <a href="register.php" class="btn btn-primary">
            + Register User
        </a>

        <a href="home.php" class="btn btn-secondary">
            Back
        </a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped mb-0">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Password</th>
                    <th>Date Created</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $counter = 1;

                while ($row = mysqli_fetch_assoc($result)):
                ?>

                    <tr>
                        <td><?= $counter++; ?></td>
                        <td><?= $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"]; ?></td>
                        <td><?= $row["username"]; ?></td>
                        <td><?= $row["birthday"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["contact_number"]; ?></td>
                        <td><?= $row["password"]; ?></td>
                        <td><?= $row["date_created"]; ?></td>
                    </tr>

                <?php endwhile; ?>

                <?php if (mysqli_num_rows($result) == 0): ?>

                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            No registered users yet.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?php
mysqli_close($conn);
require("include/footer.php");
?>

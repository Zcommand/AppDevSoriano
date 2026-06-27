<?php
require("fetchdogs.php");

$title = "Dog Information";
?>

<?php require("include/header.php"); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="text-primary mb-0">
        Registered Dogs
    </h3>

    <a href="DogRegister.php" class="btn btn-primary">
        + Register Dog
    </a>

</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped mb-0">
            <thead class="table-primary">

                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Color</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Date Registered</th>
                </tr>

            </thead>
            <tbody>

                <?php
                $counter = 1;

                while ($row = mysqli_fetch_assoc($result)):
                ?>

                    <tr>

                        <td><?= $counter++; ?></td>

                        <td><?= $row['name']; ?></td>

                        <td><?= $row['breed']; ?></td>

                        <td><?= $row['age']; ?></td>

                        <td><?= $row['address']; ?></td>

                        <td><?= $row['color']; ?></td>

                        <td><?= $row["height"]; ?> ft</td>

                        <td><?= $row["weight"]; ?> kg</td>

                        <td><?= $row['date_created']; ?></td>

                    </tr>

                <?php endwhile; ?>

                <?php if (mysqli_num_rows($result) == 0): ?>

                    <tr>

                        <td colspan="9" class="text-center text-muted">
                            No dogs registered yet...
                        </td>

                    </tr>

                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?php require("include/footer.php"); ?>
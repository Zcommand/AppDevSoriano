<?php require("register.php"); ?>
<?php require("include/header.php"); ?>

<div class="d-flex justify-content-center">
    <div class="col-md-7">
        <h3 class="mb-3 text-primary">Dog Registration</h3>

        <?php if ($message): ?>

            <div class="alert alert-<?= $type; ?> alert-dismissible fade show">
                <?= $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="DogRegister.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Dog Name</label>
                        <input
                            type="text"
                            name="dog_name"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Breed</label>
                        <input
                            type="text"
                            name="breed"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input
                            type="number"
                            name="age"
                            class="form-control"
                            min="0"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input
                            type="text"
                            name="address"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Color</label>
                        <input
                            type="text"
                            name="color"
                            class="form-control"
                            required>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Height (ft)</label>
                            <input
                                type="number"
                                step="0.01"
                                name="height"
                                class="form-control"
                                required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Weight (kg)</label>
                            <input
                                type="number"
                                step="0.01"
                                name="weight"
                                class="form-control"
                                required>
                        </div>

                    </div>

                    <div class="d-flex justify-content-between">

                        <button
                            type="submit"
                            class="btn btn-primary">
                            Save Dog
                        </button>

                        <a
                            href="DogView.php"
                            class="btn btn-secondary">
                            View Dogs
                        </a>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require("include/footer.php"); ?>
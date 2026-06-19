<?php
$pageTitle = "Services";
$data = array(
    "Repairs" => 150.00000,
    "Sales" => 0.00000,
    "Quotations" => 0.00000,
    "Trades" => 350.9822
);

include 'include/header.php';
?>

        <main class="main-content">
            <section>
                <h2>Services Page</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>
                    <ul>
                        <?php
                        foreach ($data as $key => $value) {
                            echo "<li>$key: $value</li>";
                        }
                        ?>
                    </ul>
                </p>
            </section>
        </main>

<?php
include 'include/footer.php';
?>
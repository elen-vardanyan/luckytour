<?php
require('config.php');
require('./functions.php');

$success_msg = "";
$error_msg = "";

// Get Tables
$tables = get_tables($con);
if (!$tables) die("No table found");
$selected_table = (isset($_GET['table']) && in_array($_GET['table'], $tables)) ? $_GET['table'] : $tables[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = array();
    foreach ($_POST as $key => $value) {
        if ($key == "id") continue;
        array_push($fields, "`$key`='$value'");
    }
    $fields_str = join("`, `", array_keys($_POST));
    $values_str = join("', '", array_values($_POST));
    print_r($fields_str);
    print_r($values_str);
    $sql = "INSERT INTO `$selected_table` (`$fields_str`) VALUES ('$values_str')";
    print_r($sql);
    $res = mysqli_query($con, $sql);
    print_r($res);
    header("Location: read.php?table=$selected_table");
    exit;
    // $success_msg = "Added successfully";
}


$table_fields = array();
$field_sql = "SHOW COLUMNS FROM $selected_table";
$fields_res = mysqli_query($con, $field_sql);
if ($fields_res && mysqli_num_rows($fields_res) > 0) {
    $fields = mysqli_fetch_all($fields_res);
    foreach ($fields as $field) {
        array_push($table_fields, $field[0]);
    }
} else {
    die("Table not available.");
}

mysqli_close($con);
?>

<?php require("./components/t_head.php") ?>

<body>
    <?php require('./components/navbar.php') ?>
    <br>
    <?php if ($success_msg != '') : ?>
        <div class="alert alert-success" role="alert">
            <?= $success_msg ?>
        </div>
    <?php endif; ?>
    <?php if ($error_msg != '') : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error_msg ?>
        </div>
    <?php endif; ?>

    <main class="container">
        <a href="read.php" class="btn btn-success">Back</a>
        <hr />
        <form method="POST">
            <div class="mb-3">
                <label for="table_name" class="form-label">Table</label>
                <input value="<?= $selected_table ?>" disabled name="table" type="string" class="form-control" id="table_name">
            </div>
            <?php foreach ($table_fields as $field_name) : ?>
                <div class="mb-3">
                    <label for="<?= $field_name ?>" class="form-label"><?= $field_name ?></label>
                    <input name="<?= $field_name ?>" <?= $field_name == "id" ? "disabled" : "" ?> type="string" class="form-control" id="<?= $field_name ?>">
                </div>
            <?php endforeach; ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>

</html>
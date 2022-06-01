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

    if (isset($_POST['id'])) {
        $pid = $_POST['id'];
    }
    $pid = isset($_GET['id']) ? $_GET['id'] : null;

    $updates = array();
    foreach ($_POST as $key => $value) {
        if ($key == "id") continue;
        array_push($updates, "`$key`='$value'");
    }
    $update_string = join(", ", $updates);
    $sql = "UPDATE $selected_table SET $update_string WHERE `id`=$pid";
    $res = mysqli_query($con, $sql);
    if ($res) {
        header("Location: read.php?table=$selected_table");
        exit;
    } else {
        die("Error while deleting user.");
    }
    // $success_msg = "Updated successfully";
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM $selected_table WHERE `id`=$id";
$result = mysqli_query($con, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
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
            <?php foreach ($data as $field_name => $value) : ?>
                <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label"><?= $field_name ?></label>
                    <input name="<?= $field_name ?>" value="<?= $value ?>" <?= $field_name == "id" ? "readonly" : "" ?> type="string" class="form-control" id="exampleInputPassword1">
                </div>
            <?php endforeach; ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>

</html>
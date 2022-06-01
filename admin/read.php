<?php
require('./config.php');
require('./functions.php');

$table_fields = array();
$data = null;

// Get Tables
$tables = get_tables($con);
if (!$tables) die("No table found");
$selected_table = (isset($_GET['table']) && in_array($_GET['table'], $tables)) ? $_GET['table'] : $tables[0];



// Query for getting table fields.
$field_sql = "SHOW COLUMNS FROM $selected_table";
$fields_res = mysqli_query($con, $field_sql);
if ($fields_res && mysqli_num_rows($fields_res) > 0) {
    $fields = mysqli_fetch_all($fields_res);
    foreach ($fields as $field) {
        array_push($table_fields, $field[0]);
        # code...
    }
} else {
    die("Table not available.");
}


$sql = "SELECT * FROM $selected_table";
$result = mysqli_query($con, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require("./components/t_head.php") ?>

<body>
    <?php require('./components/navbar.php') ?>
    <br>
    <main class="container">
        <div class="row">
            <div class="col-3">
                <a href="create.php?table=<?= $selected_table ?>" class="btn btn-success">Create</a>

            </div>
            <div class="col"></div>
            <div class="col-md-4 col-8 right">
                <form action="read.php" method="GET">
                    <div class="row">
                        <select name='table' class="col form-select" aria-label="table">
                            <?php foreach ($tables as $table) : ?>
                                <option value="<?= $table ?>" <?= $table == $selected_table ? "selected" : "" ?>> <?= $table ?></option>
                            <?php endforeach ?>
                        </select>
                        <button class="col btn btn-success" type="submit">OK</button>
                    </div>
                </form>
            </div>

        </div>
        <hr />
        <?php if ($data > 0) : ?>
            <table id="data" class="table">
                <thead>
                    <tr>
                        <?php
                        foreach ($table_fields as $table_field) {
                            echo "<th>$table_field</th>";
                        }

                        ?>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <?php foreach ($row as $cell) : ?>
                                <td><?= $cell ?></td>
                            <?php endforeach; ?>
                            <td class="action">
                                <form action="edit.php" method="GET">
                                    <input name="table" type="hidden" value="<?= $selected_table ?>">
                                    <input name="id" type="hidden" value="<?= $row[0] ?>">
                                    <button type="submit" href="" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                                </form>
                                <form action="delete.php" method="POST">
                                    <input name="table" type="hidden" value="<?= $selected_table ?>">
                                    <input name="id" type="hidden" value="<?= $row[0] ?>">
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <h5>No data available.</h5>
        <?php endif ?>
    </main>
</body>

</html>
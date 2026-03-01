<?php
include "db.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM employees WHERE id=$id")
);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "
UPDATE employees SET
employee_name='$name',
age='$age',
salary='$salary',
department='$department',
phone='$phone'
WHERE id=$id
");

    header("Location:table.php?msg=Employee Updated Successfully");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="card">

            <h2>Edit Employee</h2>

            <form method="POST">

                <input type="text" name="name" value="<?= $data['employee_name'] ?>" required>

                <input type="number" name="age" value="<?= $data['age'] ?>" required>

                <input type="number" name="salary" value="<?= $data['salary'] ?>" required>

                <input type="text" name="department" value="<?= $data['department'] ?>" required>

                <input type="text" name="phone" value="<?= $data['phone'] ?>" required>

                <button name="update">Update Employee</button>

            </form>

        </div>
    </div>

</body>

</html>
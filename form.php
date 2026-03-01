<?php include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['employee_name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO employees
    (employee_name, age, salary, department, phone, address)
    VALUES
    ('$name','$age','$salary','$department','$phone','$address')";

    mysqli_query($conn, $query);

    header("Location: table.php?msg=Employee Added Successfully");
    exit();
} ?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Add Employee Details</h2>

            <form action="" method="POST">

                <input type="text" name="employee_name" placeholder="Employee Name" required>

                <input type="number" name="age" placeholder="Age" required>

                <input type="number" step="0.01" name="salary" placeholder="Salary" required>

                <input type="text" name="department" placeholder="Department" required>

                <input type="tel" name="phone" placeholder="Phone Number" required>

                <input type="text" name="address" placeholder="Address" required>

                <button type="submit" name="submit">Add Employee</button>

            </form>

            <br>
            <a href="table.php">View Employees</a>

        </div>
    </div>

</body>

</html>
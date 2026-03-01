<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="card">

            <h2>Employee Records</h2>

            <?php
            if (isset($_GET['msg'])) {
                echo "<div class='msg'>" . $_GET['msg'] . "</div>";
            }
            ?>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>

                <?php
                $result = mysqli_query($conn, "SELECT * FROM employees");

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['employee_name']; ?></td>
                        <td><?= $row['age']; ?></td>
                        <td><?= $row['salary']; ?></td>
                        <td><?= $row['department']; ?></td>
                        <td><?= $row['phone']; ?></td>

                        <td>
                            <a class="edit" href="update.php?id=<?= $row['id'] ?>">Edit</a>

                            <a class="delete" onclick="return confirm('Are you sure you want to delete this employee?')"
                                href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                        </td>

                    </tr>

                <?php } ?>

            </table>

            <br>
            <a href="form.php"><button>Add Employee</button></a>

        </div>
    </div>

</body>

</html>
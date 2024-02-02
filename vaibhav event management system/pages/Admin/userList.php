<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>USER DATA</h2>
<table>
  <tr>
    <th>Serial No.</th>
    <th>User Name</th>
    <th>Email Id</th>
    <th>DOB</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Contact</th>
    <th>Action</th>
    <th>Action</th>

  </tr>
  <?php
    require_once("../../db/conn.php");
    $query = "SELECT * FROM tbl_user";
    $result = mysqli_query($conn,$query);
    $sr = 1;
    while ($row=mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $sr; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['dob']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><button>Update</button></td>
          <td><a href="userDelete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
        </tr>
      <?php
      $sr++;
    }
  ?>
</table>
</body>
</html>
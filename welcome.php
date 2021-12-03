


<!-- PHP FILE XAMPP -->


<html>
<head>
	<style type="text/css">
		table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px 15px;
	</style>
</head>
<body>

<table border="1">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
  </tr>

  <tr>
    <td><?php echo $_POST["fname"]; ?></td>
    <td><?php echo $_POST["lname"]; ?></td>
    <td><?php echo $_POST["email"]; ?></td>
    <td><?php echo $_POST["pswd"]; ?></td>
  </tr>
</table>

</body>
</html>
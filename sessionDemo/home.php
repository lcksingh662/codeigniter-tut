<html>
<head>
	<title>HOME</title>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</head>
<body>
<?php 
session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Hello ' . $_SESSION['name'] .'</h1>';

    echo '<table class="center">
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Age</th>
    </tr>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr>
      <td>John</td>
      <td>Doe</td>
      <td>80</td>
    </tr>
  </table>';

    echo '<a href="logout.php">Logout</a>';
}


else{
    echo '<h1> Hello Anonymous </h1>';
    include 'loginPage.php';

}



?>
</body>
</html>

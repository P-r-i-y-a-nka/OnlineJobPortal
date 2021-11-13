<?php include 'config3.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Jobs</title>
        <link href="style.css" rel="stylesheet">
        <div class="sidebar">
  <a class="active" href="#home">Jobs</a>
  <a href="#jobs.php">Candidate Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select name,apply,qual,year from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <tr>
        <th scope="row">'.++$i.'</th>
        <td>'.$rows['name'].'</td>
        <td>'.$rows['apply'].'</td>
        <td>'.$rows['year'].'</td>
        </tr>';}}
    else{
      echo "";}?>
  </tbody>
</table>
</div>
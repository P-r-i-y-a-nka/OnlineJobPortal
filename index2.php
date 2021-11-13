<?php include 'config3.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <title>Dashboard</title>
        <link href="style.css" rel="stylesheet">
        <div class="sidebar">
  <a class="active" href="#home">Jobs</a>
  <a href="#jobs.php">Candidate Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class="content">
    <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="POST">
    <div class="mb-3">
        <label for="Company name" class="form-label">Company name</label>
        <input type="text" class="form-control" id="" name="cname">
    </div>
    <div class="mb-3">
        <label for="exampleInputPosition" class="form-label">Position</label>
        <input type="text" class="form-control" id="exampleInputPosition" name="pos">
    </div>
    <div class="mb-3">
        <label for="Job Desc" class="form-label">Job description</label>
        <input type="text" class="form-control" id="Job Desc" name="Jdesc">
    </div>
    <div class="mb-3">
        <label for="Job Desc" class="form-label">Skills Required</label>
        <input type="text" class="form-control" id="skills" name="skills">
    </div>
    <div class="mb-3">
        <label for="CTC" class="form-label">CTC</label>
        <input type="text" class="form-control" id="CTC" name="CTC">
    </div>
    <button type="submit" class="btn btn-primary" name="job">Submit</button>
    </form>
</div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql="Select cname,position,CTC from jobs";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
      echo"
      <tbody>
      <tr>
        <td>".++$i."</td>
        <td>".$rows['cname']."</td>
        <td>".$rows['position']."</td>
        <td>".$rows['CTC']."</td>
      </tr>";
      }}
      else{
        echo "";}?>
  </tbody>
</table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
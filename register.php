<?php
include('header.php');
?>

<main role="main" class="container">

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $_POST['name'];?></td>
     
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $_POST['gender'];?></td>
      
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><?php echo $_POST['month'].' '.$_POST['day'].' '.$_POST['year'];?></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $_POST['email'];?></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>

</main><!-- /.container -->
<?php
include('footer.php');
?>
<?php
include('header.php');
?>

<main role="main" class="container">

  <div class="col-md-4 offset-md-4 border p-3 shadow p-3 mb-5 bg-white rounded">

    
    <form action="register.php" method="post">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Enter Name" name='name'>
  </div>
   
   <div class="form-group">
    <label for="exampleFormGender">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name='gender'>
      <option>Female</option>
      <option>Male</option>
    </select>
  </div>
 
<
 <div class="form-group">
    <label for="exampleFormControlSelect1">Month</label>
    <select class="form-control" id="exampleFormControlSelect1" name='month'>
      <option>January</option>
      <option>Febuary</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      

     </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Day</label>
    <select class="form-control" id="exampleFormControlSelect1" name='day'>
      <?php
        for($i=1; $i<=31; $i++)
        {
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i;  ?></option>

        <?php
   
         }
        ?>


      
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Year</label>
    <select class="form-control" id="exampleFormControlSelect1" name='year'>
      <?php
        for($i=2000; $i<=2010; $i++)
        {
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i;  ?></option>

        <?php
   
         }
        ?>


      
    </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name='email'>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>

   <div class="form-group">
    <label for="exampleInputReEnterPassword1">Re-Enter Password</label>
    <input type="password" class="form-control" id="exampleInputReEnterPassword1" placeholder="Re-Enter Password" name='reenterpassword'>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

</main><!-- /.container -->
<?php
include('footer.php');
?>
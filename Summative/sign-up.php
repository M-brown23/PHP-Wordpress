<?php

/*

Template Name: Matt's sign up Page Template

*/

?>

<body style="background-color:<?php echo get_theme_mod('color_picker2');?>">


  <div class="container" style="background-color:<?php echo get_theme_mod('color_picker2');?>" >


<?php get_header(); ?>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='' rel='stylesheet'>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script>
<br>
<div class="container">

  <form>
    <h2 style="color: #ffb600;">Event Sign up</h2>
    <br>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label style="color: #ffb600;" for="first">First Name</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label style="color: #ffb600;" for="last">Last Name</label>
          <input type="text" class="form-control" placeholder="" id="last">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label style="color: #ffb600;" for="company">Company</label>
          <input type="text" class="form-control" placeholder="" id="company">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label style="color: #ffb600;" for="phone">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label style="color: #ffb600;" for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="email">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <div class="dropdown">
  <button style="margin-top: 32px; "class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Participants
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <p>1</p>
    <p>2</p>
    <p>3</p>
    <p>4</p>
    <p>5</p>
    <p>6 (max)</p>

  </div>
</div>

        </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
  </form>
    <button type="submit" data-toggle="modal" data-target="#modal2" class="button-2">Submit</button>
  </form>
</div>

<div style="margin-top:50px;"id="modal2" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div style="background-color:#2b2b2b;" class="modal-content">
      <div class="modal-header">
        <h1 style="color:#ffb600;"class="modal-title">Thank You!</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:#ffb600;">Thank you for your booking. We will see you based on your booking time for pricing.</p>
      </div>
      <div class="modal-footer">
        <button class="button-2"><a href="<?php echo home_url(); ?>">Back to Home</button></a>
        <br>
      </div>
      <br>
    </div>
  </div>
</div>
</div>
<br>

</body>
<?php get_footer(); ?>

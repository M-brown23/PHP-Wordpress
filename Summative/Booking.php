<?php

/*

Template Name: Matt's booking Page Template

*/

?>
<?php get_header(); ?>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='' rel='stylesheet'>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script>

  <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
                    <form>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <select class="form-control" required>
                                      <option value="" selected hidden>Court Number</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      <option>11</option>
                                      <option>12</option>
                                  </select>
                                  <span class="select-arrow"></span>
                                  <span class="form-label">Rooms</span>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <select class="form-control" required>
                                      <option value="" selected hidden>Sport of choice</option>
                                      <option>Basketball</option>
                                      <option>Volleyball</option>
                                      <option>Netball</option>
                                      <option>Hockey</option>
                                      <option>Other</option>
                                  </select>
                                  <span class="select-arrow"></span>
                                  <span class="form-label">Children</span>
                              </div>
                          </div>
                      </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" type="date" required>
                                    <span class="form-label">Check In</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>Start</option>
                                        <option>1:00</option>
                                        <option>1:30</option>
                                        <option>2:00</option>
                                        <option>2:30</option>
                                        <option>3:00</option>
                                        <option>3:30</option>
                                        <option>4:00</option>
                                        <option>5:00</option>
                                        <option>5:30</option>
                                        <option>6:00</option>
                                        <option>6:30</option>
                                        <option>7:00</option>
                                        <option>8:30</option>
                                        <option>9:30</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">AM-PM</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>AM-PM</option>
                                        <option>AM</option>
                                        <option>PM</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>Finish</option>
                                        <option>1:00</option>
                                        <option>1:30</option>
                                        <option>2:00</option>
                                        <option>2:30</option>
                                        <option>3:00</option>
                                        <option>3:30</option>
                                        <option>4:00</option>
                                        <option>5:00</option>
                                        <option>5:30</option>
                                        <option>6:00</option>
                                        <option>6:30</option>
                                        <option>7:00</option>
                                        <option>8:30</option>
                                        <option>9:30</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>AM-PM</option>
                                        <option>AM</option>
                                        <option>PM</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="Enter your Phone Number">
                                    <span class="form-label">Phone</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="button-2" data-toggle="modal" data-target="#modal"><a href="#modal">Book now</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-top:50px;"id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div style="background-color:#2b2b2b;" class="modal-content">
      <div class="modal-header">
        <h1 style="color:#ffb600;"class="modal-title">Thank You!</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-header">
        <p style="color:#ffb600;">Thank you for your booking. We will see you based on your booking time for pricing.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button class="button-2"><a href="<?php echo home_url(); ?>">Back to Home</button></a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

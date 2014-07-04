<?php include('header.php'); ?>



  <div class="col-lg-8">

    <h1>eWallet Details <br><small>Neteller Account #12242525272</small></h1>
    

        <ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> eWallet Details</li>
            </ol>
       
        <p class="lead">Enter details</p>
       

      <form role="form">

      <div class="form-group first-group">
       <label>1. Which portal is this account for?</label>
        <div class="radio">
          <label class="col-md-3 col-sm-3">
            <input type="radio" name="portal" id="optionsRadios1" value="Skrill" >
            Skrill
          </label>
      
          <label class="col-md-3 col-sm-3">
            <input type="radio" name="portal" id="optionsRadios2" value="Neteller">
            Neteller
          </label>
      </div>

      </div>
      


        <div class="form-group">
          <label for="exampleInputEmail1">2. What is the account email address associated with this <span class="portValue"></span> account?</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>

        


        <div class="form-group">
          <label for="exampleInputEmail1">3. What is the <strong>contact</strong> email associated with this <span class="portValue"></span> account?</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>

        


        <div class="form-group">
          <label for="exampleText">4. What is the account number for this  <span class="portValue"></span> account?</label>
          <input type="text" class="form-control" id="exampleText" placeholder="Text input">
        </div>
        
        

        <div class="form-group">

      <p><label>5. What is the currency demonimation for this  <span class="portValue"></span> account?</label></p>
      
           <label class="col-md-3">
            <input type="radio" name="currency" id="optionsRadios1" value="option1" >
            USD
          </label>
      
           <label class="col-md-3">
            <input type="radio" name="currency" id="optionsRadios2" value="option2">
            EUR
          </label>

           <label class="col-md-6">
            <input type="radio" name="currency" id="other-radio" value="option3">
            Other<br>
            <input type="text" class="form-control" id="other-field" placeholder="If other selected this shows up">
          </label>

         </div>
  
       

      <div class="form-group">
      <p><label>6.What is the approximate date of your last deposit from <span class="portValue"></span> to a GAMBLING SITE?</label></p>
      <div class="input-group date">
            <input type="text" class="form-control">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      </div>
      </div>
      

    <div class="form-group">
      <label>7. How do you intend to use this account?</label>
        <div class="form-inline row">
          <label class="col-md-3">
            <input type="checkbox"> 
            Sports
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            Sports Betting
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            Other
          </label>
        </div>
        </div>
        
        
      <div class="form-group">
        <label>7a. What Poker websites do you commonly play?</label>
        <div class="form-inline row">
          <label class="col-md-3">
            <input type="checkbox"> 
            888 Poker
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            Party Poker 
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            Bovada Poker
          </label>
        </div>

        <div class="form-inline row">
          <label class="col-md-3">

            <input type="checkbox"> 
            Bet 365
          </label>

          <label class="col-md-3">

            <input type="checkbox"> 
            Titan Poker  
          </label>

          <label class="col-md-3">

            <input type="checkbox"> 
            PokerStars
          </label>
        </div>

        <div class="form-inline row">
          <label class="col-md-3">
            <input type="checkbox"> 
            Carbon Poker
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            Lock Poker
          </label>

          <label class="col-md-3">
            <input type="checkbox"> 
            BetOnline
          </label>
        </div>

        </div>
      
          <br>
          <div class="alert alert-success submit-message">Thank You for submitting your details!</div>
          <button type="button" class="btn btn-success show-message">Submit</button>

        </form>

        </div> <!-- Main -->


        <!--Sidebar Content -->

        <div class="col-md-4 sidebar">

        <!-- Account Status -->
            <div class="panel panel-primary">
              <div class="panel-heading center-align ">
                <h3 class="panel-title center-block"><i class="fa fa-user"></i> Account Status: Approved</h3>
              </div>
              <div class="panel-body">
              <div class="center-align">
                <button type="button" class="btn btn-success">Save as<br> Draft</button>
                <button type="button" class="btn btn-success">Submit<br> for Review</button>
              </div>

                <hr>

                <p><strong>Last Updated:</strong> June 4, 2014 by Skrill Admin</p>

                <p><strong>Tagged?:</strong> Yes</p>
                <p><strong>Tagged to HG?:</strong> Yes</p>
                
              </div>
            </div> <!-- End Account -->

            <!-- Documents -->
            <div class="panel panel-primary">
              <div class="panel-heading center-align ">
                <h3 class="panel-title center-block"><i class="fa fa-table"></i> Documents</h3>
              </div>
              <div class="panel-body">
                
                  <form role="form">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th class="center-align">File</th>
                          <th>Required</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>Identification</td>
                          <td class="center-align"><i class="fa fa-file"></i></td>
                          <td class="center-align"><i class="fa fa-check-square-o"></i></td>
                        </tr>
                        <tr>
                          
                          <td>Consent Form</td>
                          <td class="center-align"><button type="button" class="btn btn-info document-button">Upload</button></td>
                          <td class="center-align"><i class="fa fa-check-square-o"></i></td>
                        </tr>
                        <tr>
                          
                          <td>Other</td>
                          <td class="center-align"><button type="button" class="btn btn-info document-button">Upload</button></td>
                          <td class="center-align"><i class="fa fa-square-o"></i></td>
                        </tr>
                        <tr>
                          
                          <td><button type="button" class="btn btn-info document-button">Add</button></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                      </tbody>
                    </table>
                  </form>
    
                
              </div>
            </div> <!-- End documents -->

            <!-- Comments -->
            <div class="panel panel-primary side-comments">
              <div class="panel-heading center-align ">
                <h3 class="panel-title center-block"><i class="fa fa-user"></i> Comments</h3>
              </div>
              <div class="panel-body">


                <ul class="">
      
                <li class="message-preview">
                  
                    <span class="avatar"><img src="http://lorempixel.com/output/business-q-c-50-50-9.jpg"></span>
                    <div class="message-box">
                    <span class="name">John Smith:</span>
                    <span class="message">OK - Thanks a lot!</span><br>
                    <span class="time"><i class="fa fa-clock-o"></i> 9:24 PM</span>
                    </div>
                  
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  
                    <span class="avatar"><img src="http://lorempixel.com/output/sports-q-c-50-50-8.jpg"></span>
                    <div class="message-box">
                    <span class="name">John Smith:</span>
                    <span class="message">We have reviewed your account and we've approved you for VIP level gold. </span><br>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                    </div>
                 
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  
                    <span class="avatar"><img src="http://lorempixel.com/output/people-q-c-50-50-1.jpg"></span>
                    <div class="message-box">
                    <span class="name">John Smith:</span>
                    <span class="message">OK - this account looks good. Hopefully we should hear back from Skrill shortly. </span><br>
                    <span class="time"><i class="fa fa-clock-o"></i> 2:37 PM</span>
                    </div>
                
                </li>
                <li class="divider"></li>
                <button type="button" class="btn btn-default">Add<br>Comment</button>
              </ul>
                
              </div>
            </div> <!-- End Comments -->
         

        </div> <!-- Sidebar -->
        
      

    

    <?php include('footer.php'); ?>
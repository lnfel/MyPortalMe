
     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="section-body">
		  
		  
			<div class="row">
                            <div class="col-12 col-md-8 col-lg-8">
				
				<div class="card">
                                    <div class="card-header">
                                      <h4>Announcement</h4>
                                    </div>
                                    <div class="card-body">
                                      <ul class="list-unstyled">
                                          <?php foreach ($annoucement as $ann) { ?>
                                            <li class="media">
                                              <img class="mr-3" src="<?php echo base_url(); ?>assets/stisla/img/example-image-50.jpg" alt="Generic placeholder image">
                                              <div class="media-body">
                                                <h5 class="mt-0 mb-1"><?php echo $ann->Announcement; ?></h5>
                                                <p><?php echo $ann->Description; ?></p>
                                              </div>
                                            </li>
                                          <?php } ?>
                                      </ul>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Phone Directory</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Direct</th>
                                                    <th>Local</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>EVP/Vice President for Administrative Affais</td>
                                                <td></td>
                                                <td>201</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><strong>Engineering, Building and Grounds</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Office of the Director</td>
                                                <td></td>
                                                <td>611</td>
                                            </tr>
                                            <tr>
                                                <td>Backgate/Security Office</td>
                                                <td></td>
                                                <td>612</td>
                                            </tr>
                                            <tr>
                                                <td>Auditorium</td>
                                                <td></td>
                                                <td>171</td>
                                            </tr>
                                            <tr>
                                                <td>Human Resources Department</td>
                                                <td></td>
                                                <td>621</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><strong>Information Technology</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Technical Support Area</td>
                                                <td></td>
                                                <td>228</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
			  
                            <div class="col-12 col-md-4 col-lg-4">
                                
                                <div class="row">
                                    <div class="col-12">
                                      <div class="card">
                                        <div class="card-header">
                                          <h4>Calendar</h4>
                                        </div>
                                        <div class="card-body">
                                          <div class="fc-overflow">
                                            <div id="myEvent"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                
                                <div class="card">
                                    <div class="card-header">
                                      <h4>Holiday List - Year (<?php echo date("Y"); ?>)</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-md">
                                              <thead>
                                                <tr>
                                                  <th style="width:100px;">Date</th>
                                                  <th style="width:100px;">Day</th>
                                                  <th scope="col">Holiday</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>JAN 1</td>
                                                  <td>Sunday</td>
                                                  <td><b>New Year's Day</b> <br/> <small>Regular Holiday</small></td>
                                                </tr>
                                                 <tr>
                                                  <td>DEC 31</td>
                                                  <td>Sunday</td>
                                                  <td><b>New Years Eve</b> <br/> <small>Special Non-working Day</small></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
			  
			 </div>
			  
              
              
              
              
              
			  
			<div class="row">
                            <div class="col-12 col-md-8 col-lg-8">
                                
                            </div>
                        </div>
			    

			  
			  
			  
          </div>
        </section>
      </div>
	  


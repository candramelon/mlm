

               

                <!-- Main content -->
                <section class="content">
                    
                    
                     <div class="row">
                     
                     <div class="col-md-12">
                    
                   
                    
                             <div class="box">
                           
                           
                                <div class="box-body2 table-responsive" style="padding:20px; text-align:center;">
                                <?php
                                if($this->session->userdata('user_type_id') == 1){
								?>
                                  <h2>Selamat Datang</h2>
                                  <h4> Di website administrator IOB </h4><br>
                                  <?php
								}else if($this->session->userdata('user_type_id') == 2){
								  ?>
                                  <h2>Welcome </h2>
                                  <h4>to</h4>
                                  <h4> SUCCESSFUL IOB MEMBER'S AREA</h4><br>
                                  <?php
								}
								  ?>
                                  <br />
									<div style="font-size:11px; color:#ccc;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                       
                        </div>
                        
                      
                        
                    </div>

					 <div class="row">
                      
                        <!-- right column -->
                       
                    </div>   <!-- /.row -->


                </section><!-- /.content -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/navbar');?>
<?php $this->load->view('layout/adminsidebar/adsidebar');?>







<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
                <div>
            
			       <!-- Main content -->
			    <section class="content">
			      <div class="container-fluid">
			        <!-- Small boxes (Stat box) -->
			        <div class="row">
			          <div class="col-lg-3 col-6">
			            <!-- small box -->
			            <div class="small-box bg-info">
			              <div class="inner">
			                <h3>150</h3>

			                <p>New Orders</p>
			              </div>
			              <div class="icon">
			                <i class="ion ion-bag"></i>
			              </div>
			              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			          </div>
			          <!-- ./col -->
			          <div class="col-lg-3 col-6">
			            <!-- small box -->
			            <div class="small-box bg-success">
			              <div class="inner">
			                <h3>53<sup style="font-size: 20px">%</sup></h3>

			                <p>Bounce Rate</p>
			              </div>
			              <div class="icon">
			                <i class="ion ion-stats-bars"></i>
			              </div>
			              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			          </div>
			          <!-- ./col -->
			          <div class="col-lg-3 col-6">
			            <!-- small box -->
			            <div class="small-box bg-warning">
			              <div class="inner">
			                <h3>44</h3>

			                <p>User Registrations</p>
			              </div>
			              <div class="icon">
			                <i class="ion ion-person-add"></i>
			              </div>
			              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			          </div>
			          <!-- ./col -->
			          <div class="col-lg-3 col-6">
			            <!-- small box -->
			            <div class="small-box bg-danger">
			              <div class="inner">
			                <h3>65</h3>

			                <p>Unique Visitors</p>
			              </div>
			              <div class="icon">
			                <i class="ion ion-pie-graph"></i>
			              </div>
			              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div>
			          </div>
			          <!-- ./col -->
			        </div>
			       
			        
			        
			      </div>
			    </section>
			    <!-- /.content -->    
        
            
                </div>
             </div>
            </div>            
          </div>          
        </div>        
      </div>     
    </section>     
  </div>
<?php $this->load->view('layout/footer');?>
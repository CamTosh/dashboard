<?php include('internals/layout/meta.php'); ?>
    <!-- AJAX Content Refresh -->
    <!-- Uptime -->
    <script type="text/javascript">
      $(document).ready(function(){
	setInterval("updateKernel()", 100000); // kernel
        setInterval("updateUptime()", 1000);  // uptime
	setInterval("updateLoad()", 30000); // load	
	setInterval("updateMemory()", 30000); // memory
	setInterval("updateStorage()", 30000); // storage
      });
      function updateKernel(){
	$('#dashboard-kernel').html('<?php echo exec('uname -r'); ?>');
      }
      function updateUptime(){
        $('#dashboard-uptime').load('internals/functions/uptime.php');
      }
      function updateLoad() {
        $('#dashboard-load').load('internals/functions/load.php');
      }
      function updateMemory() {
        $('#dashboard-memory').load('internals/functions/memory.php');
      }
      function updateStorage() {
        $('#dashboard-storage').load('internals/functions/storage.php');
      }
    </script>

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Dashboard</a>
	  <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li class="active"><a href="#">General</a></li>
              <li><a href="network.php">Network</a></li>
              <li><a href="stats.php">Statistics</a></li>
	      <li><a href="apps.php">Software</a></li>
	      <li><a href="test.php">Notifications</a></li>
	    </ul>
	  </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <span class="span6">
	  <h2>System Information</h2>
	  <table class="table">
	    <thead>
	      <th><span class="color">Property</span></th>
	      <th><span class="color">Value</span></th>
	    </thead>
	    <tr>
	      <td>Kernel version:</td>
	      <td id="dashboard-kernel"><?php echo exec('uname -r'); ?></td>
	    </tr>
	    <tr>
	      <td>Uptime:</td>
	      <td id="dashboard-uptime"><?php include('internals/functions/uptime.php'); ?></td>
	    </tr>
	    <tr>
	      <td>Hostname:</td>
	      <td><?php echo exec('uname -n'); ?></td>
	    </tr>
	    <tr>
	      <td>Hardware name:</td>
	      <td><?php echo exec('uname -m'); ?></td>
	    </tr>
	    <tr>
	      <td>Operating system:</td>
	      <td><?php echo exec('uname -o'); ?></td>
	    </tr>
	    <tr>
	      <td>System load:</td>
	      <td id="dashboard-load"><?php include('internals/functions/load.php'); ?></td>
	    </tr>
	  </table>
	</span>
        <span class="span6" id="dashboard-memory">
	      <?php include('internals/functions/memory.php'); ?>
	</span>
      </div>

      <br /><h2>Storage</h2>
      <div class="row">	
        <span class="span12" id="dashboard-storage">
	      <?php include('internals/functions/storage.php'); ?>
	</span>
      </div>

      <br /><h2>Network</h2>
      <div class="row">
        <span class="span12">
          <table class="table">
            <thead>
              <th><span class="color">Protocol</span></th>
              <th><span class="color">R-Queue</span></th>
              <th><span class="color">S-Queue</span></th>
              <th><span class="color">Local address</span></th>
              <th><span class="color">Foreign address</span></th>
              <th><span class="color">State</span></th>
            </thead>
              <?php include('internals/functions/network.php'); ?>
          </table>
        </span>
        </div>


      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>

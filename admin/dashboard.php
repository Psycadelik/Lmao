<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/editor/includes/editor_functions.php'); ?>
	<?php include(ROOT_PATH . '/editor/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'editor/dashboard.php' ?>">
				<h1>LifeBlog - Admin</h1>

			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<!-- <a href="../index.php"><button>Home</button></a> -->
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>

	<div class="row">
		<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
			
		</div>		
	</div>
	<br><br><br>
	<div class="row">
		<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</div>
		





	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>Newly registered users</span>
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Published comments</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>

<footer>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script type="text/javascript">
		
		// Build the Gender chart
		Highcharts.chart('container', {
		  chart: {
		    plotBackgroundColor: null,
		    plotBorderWidth: null,
		    plotShadow: false,
		    type: 'pie'
		  },
		  title: {
		    text: 'Gender Distribution ,LifeBlog , 2018'
		  },
		  tooltip: {
		    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		  },
		  plotOptions: {
		    pie: {
		      allowPointSelect: true,
		      cursor: 'pointer',
		      dataLabels: {
		        enabled: false
		      },
		      showInLegend: true
		    }
		  },
		  series: [{
		    name: 'Brands',
		    colorByPoint: true,
		    data: [{
		      name: 'Male',
		      y: 61.41,
		      sliced: true,
		      selected: true
		    }, {
		      name: 'Female',
		      y: 11.84
		    },	{
		      name: 'Other',
		      y: 7.05
		    }]
		  }]
		});


  Highcharts.chart('container2', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Monthly Average Posts'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Rainfall (mm)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Sports',
    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

  }, {
    name: 'Artculture',
    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

  }, {
    name: 'Inspiration',
    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

  }, {
    name: 'Fashion',
    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

  }]
});

	</script>
</footer>
</body>
</html>
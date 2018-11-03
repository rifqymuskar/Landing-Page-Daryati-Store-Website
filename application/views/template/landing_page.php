<!DOCTYPE html>
<html>
<head>
	<title>Daryati Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="<?=site_url('assets/img/logo1.png')?>">
	<!-- css -->
	<?= $this->template->css('materialize.min') ?>
	<?= $this->template->css('custom') ?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	 <div class="navbar-fixed">
	  <nav class="hide-on-med-and-down">
	    <div class="container">
			<div class="nav-wrapper">
		      <a href="#" class="brand-logo"><img src="<?=site_url('assets/img/logo2.png')?>" class="responsive-img"></a>
		      <ul id="nav-mobile" class="right">
		        <li><a href="#home1">Home</a></li>
		        <li><a href="#aboutus">About US</a></li>
		        <li><a href="#ourproduct">Our Product</a></li>
		        <li><a href="#gallery">Gallery</a></li>
		        <li><a href="#service">Service</a></li>
		        <li><a class="waves-effect waves-light btn custom-1" href="collapsible.html">Buy Now!</a></li>
		      </ul>
		       
		    </div>
	    </div>
	  </nav>

	   <nav class="show-on-medium-and-down hide-on-large-only">
		<div class="nav-wrapper">
	      <ul id="nav-mobile" class="right mobile-1" style="color: #000;">
	       		<li><a href="" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a></li>
	       </ul>
	    </div>
	  </nav>

    </div>

  <ul id="slide-out" class="sidenav">
    <li><a href="#home1">Home</a></li>
    <li><a href="#aboutus">About US</a></li>
    <li><a href="#ourproduct">Our Product</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#service">Service</a></li>
    <li><a class="waves-effect waves-light btn custom-1" href="collapsible.html">Buy Now!</a></li>
  </ul>

	<?= $content ?>

	<!-- javascript -->
	<?=$this->template->js('jquery-3.3.1.min')?>
	<?=$this->template->js('materialize.min')?>
	<?=$this->template->js('custom')?>

	<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -5.159600, lng: 119.393016},
          zoom: 8
        });
      }
    </script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6kB9rkD4xx74vQvrdBybV5JqDbCeX_-o&callback=initMap"
    async defer></script>

</body>
</html>
<html>
<head>

<title> Star Bus </title>
</head>




<style>

body
{
background-color:white;
}
pub{

text-align:center;
font-family:Britannic;
background-color:skyblue;
position:absolute;
	height: 60px;
	width: 480px;
        top:150px;
       left:430px;

}



pubb{
border: 2px solid black;
border-radius: 6px;
text-align:center;

background-color:blue;


	height: 40px;
	width: 540px;
position:absolute;
        top:230px;
       left:400px;

}


.tckt{
	font-weight:bold;

position:absolute;
        top:300px;
       left:605px;
}
bk
{
border: 1px solid blue;
border-radius: 6px;
text-align:center;

background-color:lightgreen;
height: 40px;
width: 320px;
position:absolute;
        top:350px;
       left:505px;

}


</style>

<?php 
$con=mysqli_connect("localhost","root","niket123","bus_ticket");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$uname='';
$password='';
$bank='';
$no_of_tickets='';
$pid='';
$rid='';
$status='';
$c=0;

if (isset($_POST['uname']))
{
$uname=$_POST['uname'];
}

if (isset($_POST['password']))
{
$password=$_POST['password'];
}


if (isset($_POST['bank']))
{
$bank=$_POST['bank'];
}

if (isset($_POST['no_of_tickets']))
{
$no_of_tickets=$_POST['no_of_tickets'];
}

if (isset($_POST['pid']))
{
$pid=$_POST['pid'];
}

if (isset($_POST['rid']))
{
$rid=$_POST['rid'];
}

if (isset($_POST['status']))
{
$status=$_POST['status'];
}




$sql="select * from nb where uname='$uname' ";
$res=mysqli_query($con, $sql);
if(!$res)
  {
  die('Error:' . mysql_error()); 
  }


$row=mysqli_fetch_array($res);

if ($row['password'] == $_POST['password']  && $row['bank'] == $_POST['bank'])
{




	for ( $i = 0; $i < $no_of_tickets; $i++)
	{

$sqll="INSERT INTO reserves(pid,rid,status) VALUES ('$pid','$rid','booked')";

		if (!mysqli_query($con,$sqll))
		{
  			die('Error: ' . mysqli_error($con));
		}

}


echo"
<!DOCTYPE HTML>
<html>
<head>
<title> Thank You </title>


<title>Star Bus</title>
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<link href='css/bootstrap.css' rel='stylesheet' type='text/css' media='all' />
<link href='css/bootstrap-theme.min.css' rel='stylesheet' type='text/css' media='all' />
<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
<link href='css/font-awesome.css' rel='stylesheet' type='text/css' media='all' />
<link href='css/carousel.css' rel='stylesheet' type='text/css' media='all' />
<link href='css/owl.carousel.css' rel='stylesheet' type='text/css' media='all' />
<script src='js/jquery-1.10.2.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
<script src='js/owl.carousel.js' type='text/javascript'></script>
  <script>
    $(document).ready(function() {

      var owl = $('#owl-demo');

      owl.owlCarousel({

      items :4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $('.next').click(function(){
        owl.trigger('owl.next');
      })
      $('.prev').click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>
  <script type='text/javascript'>
  // Login Form
	$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
  </script>
</head>
<body>
   <!-- Start Header -->
       <div class='header'>	
   	 	    <div class='header-top'>
   	 	      <div class='wrap'> 
   	 	    	 <div class='header-top-left'>
   	 	    	 	<p>Support: 080-22556784</p>
   	 	    	 </div>
   				  <div class='header-top-right'>
	        <ul>
				
				            <li><a href ='faq.html'><i class='fa fa-comments'></i>FAQs</a></li>
<li><a href ='support.html'>Support</a></li>
				             <li><a href ='tc.html'>Terms & Conditions</a></li><li><a href='admin.html'>Admin</a></li>
				         </ul>
				    </div>
			      <div class='clear'></div>
			     </div> 
		      </div>
             <div class='header-logo-nav'>
             	  <div class='navbar navbar-inverse navbar-static-top nav-bg' role='navigation'>
				      <div class='container'>
				        <div class='navbar-header'>
				          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
				            <span class='sr-only'>Toggle navigation</span>
				            <span class='icon-bar'></span>
				            <span class='icon-bar'></span>
				            <span class='icon-bar'></span>
				          </button>
				         <div class='logo'> <a class='navbar-brand' href='index.html'><img src='images/logo.png' alt='' /></a></div>
				          <div class='clear'></div>
				        </div>
				        <div class='collapse navbar-collapse'>
				          <ul class=' menu nav navbar-nav'>
				            <li><a href='index.html'>Home</a></li>
   					 <li ><a href='about.html'>About us</a></li>
					<li><a href='mybookings.html'>My Booking</a></li>
					 <li><a href='cancellation.html'>Cancellation</a></li>
					<li><a href='print.html'>Print Ticket</a></li>
				            <li><a href='contact.html'>Contact Us</a></li>

				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class='clear'></div>
	        </div>
           </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->


<pub>
<font face='Impact' font size='7' color='green'>Payment Successful...</font>
</pub> 
	
<pubb>
<font face='Gunplay' font size='6' color='yellow'>Thank you...</font>

<font face='Gunplay' font size='6' color='yellow'>For Visiting Our Website...<br><br></font>
</pubb>

<bk>
<a href='book.html'><font face='Arial' font size='6' >Book Another Ticket<br></font></a>
 </bk>"

;

echo"
 <div class='tckt'>

<form action='ticket.php' method='post'>
<input type='hidden'  name='pid' value= '$pid' >
<input type='hidden'  name='no_of_tickets' value= '$no_of_tickets' >
<input type='submit' value='Your Tickets'>
</form></div>";
echo"

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
   <!-- End Main Content -->
	   
  <!-- Start Footer -->
  <span class='footer-arrow'></span>
       <div class='footer'>	  
       	 <div class='wrap'>	      
		  <div class='row'>
			   <div class='col-lg-6'>
			   	<h2>About STAR Bus Booking</h2>
			   	<p>Star Bus  is a registerd online bus booking website by the Our Star team. </p>
			    <ul class='links'>
			    	<li><a href='about.html'>About</a> /</li>
			    	<li><a href='tc.html'>Term of Services</a> </li>
			    	
			    </ul> 
			   </div>
			    <div class='col-lg-6'>
			  
			     <div class='products-list'>
			     <ul>
			     	
			     </ul>
			     <ul>	                         
			   
			     </ul>
			     <div class='clear'></div>
			    </div>
			     <div class='subscribe'>
			    	<form>
			    		<input type='text' placeholder='youremail@gmail.com' />
			    		<input type='submit' value='Subscribe' />
			    	</form>
			    </div>
			   </div>
			  </div>
			 </div>
		   </div>
			 <div class='footer-bottom'>
			 	<div class='wrap'>
			 	<div class='copy-right'>
			 		<p>Star Bus booking Copyright &copy; 2019-2020  all right reserved. </p>
			 	</div>
			 	<div class='social-icons'>
			 		<ul>
			 			<li><a href='#'><i class='fa fa-twitter'></i></a></li>
			 			<li><a href='#'><i class='fa fa-facebook'></i></a></li>
			 			<li><a href='#'><i class='fa fa-google-plus'></i></a></li>
			 			<li><a href='#'><i class='fa fa-rss'></i></a></li>
			 			<li><a href='#'><i class='fa fa-linkedin'></i></a></li>
			 		</ul>
			 	</div>
			 	<div class='clear'></div>
			 </div>
	       </div>
  <!-- End Footer -->"


;






	
}


else
{
header("Location:fail.html");

}



mysqli_close($con);
?>

  </body>
</html>
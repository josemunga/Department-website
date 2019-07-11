<?php
include('chunks/header.php');
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear">
      <?php
      include_once ('carousel/bootstrapcarousel.php');
      ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#">All About The University</a></li>
        <li><a href="#">Why You Should Study With Us</a></li>
        <li><a href="#">Education And Student Experience</a></li>
        <li><a href="#">Alumni And Its Donors</a></li>
        <li><a href="#">Latest University News &amp; Events</a></li>
      </ul>
<!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">
      <!-- main body -->
<!-- ################################################################################################ -->
      <div class="group btmspace-30">
        <!-- Left Column -->
        <div class="one_quarter first">
          <!-- ################################################################################################ -->
          <ul class="nospace">
		   <li class="btmspace-15"> <em class="heading"> Important Links</em>

		<div class="group">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="#">Time Table and schedules</a></li>
            <li><a href="#">Academic Assistance</a></li>
            <li><a href="#">Academic Calendars</a></li>
            <li><a href="#">Academics Office</a></li>
            <li><a href="#">Administration</a></li>
            <li><a href="#">Adult Learners</a></li>
            <li><a href="#">Alumni Chapters</a></li>
            <li><a href="#">Alumni Events</a></li>
            <li><a href="#">Athletics</a></li>
            <li><a href="#">Campus Life At a Glance</a></li>
            <li><a href="#">Campus Recreation</a></li>
            <li><a href="#">Campus Safety &amp; Security</a></li>
          </ul>
        </div>
			</li>
            <li class="btmspace-15"><a href="#"><em class="heading">Best computer lab in eastern</em> <img class="borderedbox" src="images/images/desktop-vs-laptop.png" alt=""></a>
			a fully equiped lab with mac computers
			</li>
            <li class="btmspace-15"><a href="#"><em class="heading">free programming classes</em> <img class="borderedbox" src="images/images/simulatin a simulator.png" alt=""></a>
			we offer free programming classes to physically challenged students
			</li>
			<li class="btmspace-15"><a href="#"><em class="heading">Summer Mobile developing classes</em> <img class="borderedbox" src="images/images/visual studio.png" alt=""></a>
			the best programming language in the world C#
			</li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <!-- / Left Column -->
<!-- ################################################################################################ -->
        <!-- Middle Column -->
        <div class="one_half">
          <!-- ################################################################################################ -->
          <h2><p>&nbsp;<strong style="font-family: 'times new roman', times; font-size: medium; line-height: 1.3em;">INFORMATION AND COMMUNICATION TECHNOLOGY</strong> </p></h2>

<?php
include('chunks/mainarticle.php');
?>
          <!-- ################################################################################################ -->
        </div>
        <!-- / Middle Column -->

        <!-- Right Column -->
        <div class="one_quarter sidebar">
          <!-- ################################################################################################ -->
          <ul class="nospace">
		    <li class="btmspace-15"><em class="heading">Fun Corner</em></li>
<?php
include ('chunks/techcorner.php');
?>

          </ul>
          <!-- ################################################################################################ -->
        </div>
        <!-- / Right Column -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div id="twitter" class="group">
        <div class="one_quarter first center"><a href="#"><i class="fa fa-twitter fa-3x"></i><br> Follow Us On Twitter</a></div>
        <div class="three_quarter bold">
          <p> Twitter widget to come here with 3-5 posts <a href="https://twitter.com/compchuka">@compchuka</a>

            <?php
			echo ' ';
            echo '<marquee behavior="scroll">';
            $weekday = date("l");
            $daynumber = date("dS");
            $monthyear = date("F d");
            echo "Current Time: ".date("h:i:sa");
            echo " ".date(" l F d, Y");
            echo '</marquee>'; ?>
          </p>
        </div>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
include('chunks/footer.php');
?>
</body>
</html>

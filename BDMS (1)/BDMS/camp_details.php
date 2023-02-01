<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
        body {
    min-height: 100%;
  
    word-wrap: break-word;
    font-family: Georgia,"Times New Roman",Times,serif;
    
}
h3{
    font-style: italic;
}
h1{
    color: red;
}
form{
    font-family: 'Times New Roman', Times, serif;
    font-style: bold;
}


    </style>

<body>
  <?php 
  $active ='camp';
  include('head.php') ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">

  <!-- <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Need Blood</h1>

        </div> -->
  <!-- </div> -->
  <center><h1>Blood Donation Camp </h1>
      
     <!-- <li><h3> Voluntary Blood Donation facility available at IRCS Blood Centre National Headquarters. Contact on duty technician at 011-23711551 for further queries </h3></li> -->
    <h3>To organize a blood donation camp in your area, <a href = "mailto: admin@gmail.com">Send Email</a></h3></center>
       
    <!-- <center><form>
        <label for="fname">Search for camps near you </label>
        <input type="text" id="fname" name="fname" value=""><br><br>
        
    </form> 
</center>  -->


<center><button onClick="showImage()">Camps in Mumbai</button><br><br>
<div id="first" style="height:400px; width:400px; display:none;">

<iframe src="https://my.atlistmaps.com/map/768576c4-a714-455f-a8a5-65a05c5f331a?share=true" allow="geolocation" width="640" height="440" frameborder="0" scrolling="no" allowfullscreen></iframe>
<script>
    const showImage = () => {
        document.getElementById("first").style.display ='block';
    }
</script>

</div>
</center>



</html>

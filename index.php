<html> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Covid 19 Statistics Web</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

<?php
$url = file_get_contents("https://www.hpb.health.gov.lk/api/get-current-statistical");
$jasondecode = json_decode($url);
if ($jasondecode !== null) {
   $update = $jasondecode->data->update_date_time;
   $lnew = $jasondecode->data->local_new_cases;
   $ltotal = $jasondecode->data->local_total_cases;
   $lactive = $jasondecode->data->local_active_cases;
   $ldeaths = $jasondecode->data->local_deaths;
   $lrecovered = $jasondecode->data->local_recovered;
   $lhospitals = $jasondecode->data->local_total_number_of_individuals_in_hospitals;
   $gnew = $jasondecode->data->global_new_cases;
   $gtotal = $jasondecode->data->global_total_cases;
   $gdeaths = $jasondecode->data->global_deaths;
   $grecovered = $jasondecode->data->global_recovered;
}
?>

<div class="row">
<div class="col">
<center><div class="card-header alert-dark" role="alert" id="general_info">Covid 19 Statistics Web<br>( <?php echo $update; ?> - Sri Lanka )</div></center>
</div>
</div>
<div class="row">
<div class="col-md-100">
<div class="card">
<div class="btn btn-dark">
Local Covid 19 Statistics
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item list-group-item-warning">Total Confirmed Cases: <?php echo $ltotal; ?></li>
<li class="list-group-item list-group-item-info">Active Cases: <?php echo $lactive; ?></li>
<li class="list-group-item list-group-item-secondary">Daily New Cases: <?php echo $lnew; ?></li>
<li class="list-group-item list-group-item-primary">Individuals currently under investigations in hospitals: <?php echo $lhospitals; ?></li>
<li class="list-group-item list-group-item-success">Recovered & Discharged: <?php echo $lrecovered; ?></li>
<li class="list-group-item list-group-item-danger">Deaths: <?php echo $ldeaths; ?></li>
</ul>
</div>
</div>
<br>
<div class="col-md-100">
<div class="card">
<div class="btn btn-dark">
Globle Covid 19 Statistics
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item list-group-item-warning">Total Confirmed Cases: <?php echo $gtotal; ?></li>
<li class="list-group-item list-group-item-info">Daily New Cases: <?php echo $gnew; ?></li>
<li class="list-group-item list-group-item-success">Recovered: <?php echo $grecovered; ?></li>
<li class="list-group-item list-group-item-danger">Deaths: <?php echo $gdeaths; ?></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div align="center" class="card-header alert-dark">
&copy; Copyright <?php echo date("Y"); ?> <a href="#" target="_blank">Covid 19 Statistics Web</a> | Powered by <a target="_blank" href="https://www.hpb.health.gov.lk/">HPBSL</a> | Created By <a href="http://hirunaofficial.github.io/" target="_blank">GD Hiruna</a>
</div>
</div>
</div>

<script> 
document.addEventListener('contextmenu', event=> event.preventDefault()); 
document.onkeydown = function(e) { 
if(event.keyCode == 123) { 
return false; 
} 
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ 
return false; 
} 
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ 
return false; 
} 
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ 
return false; 
} 
}
</script>

<script type="text/JavaScript">
//Covid 19 Statistics Web
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>

</body>
</html>
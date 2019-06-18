<?php include '../logincheck.php'; ?>
<html>
<head>
<link href="http://www.ferradermis.org/ScoutingApp/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="http://www.ferradermis.org/ScoutingApp/images/fdLogoSmall.png"/>
<link rel="icon" type="image/png" href="http://www.ferradermis.org/ScoutingApp/images/fdLogoSmall.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<script>
const URL = 'https://www.thebluealliance.com/api/v3/event/2019mndu2/oprs';
const data = fetch('',
   { 
   headers: new Headers({
    'X-TBA-Auth-Key': '7U1VHLOT9uLC7nvXj5Dk8bnLzUdMiwkbiN9mhcZFtvh5WMnf6nVE2sTZUgXHSaGb' 
   })
   }).then(response.json()).catch(err => console.error(err))
    

    var oprs =  data.oprs;

    document.body.innerHTML = "OPRS: " + oprs;
   
          


</script>

<!-- <script>

$(document).ready(function(){

    $.ajax({
        url: "https://www.thebluealliance.com/api/v3/event/2019mndu2?X-TBA-Auth-Key=7U1VHLOT9uLC7nvXj5Dk8bnLzUdMiwkbiN9mhcZFtvh5WMnf6nVE2sTZUgXHSaGb",
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            $('#oprs').html(res)
            document.write(res);
        }
    });


})
</script> -->

<br/>

<h2 id="oprs">OPR 1 Test</h2>

</body>
</html>
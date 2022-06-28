<?php
$conn=new PDO ("mysql:host=localhost; dbname=artisan", "root", "");
$query="SELECT * from technv where id_tech=10";
$result=$conn->query ($query);
$data=$result->fetchAll ();
for ($i=0;$i< count($data);$i++){
    $nom=$data  [$i]["numtele"];
   

}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>Whatssap</title>
	<style type="text/css">
		/* for desktop */
.whatsapp_float {
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
        font-size:30px;
	box-shadow: 2px 2px 3px #999;
        z-index:100;
}

.whatsapp-icon {
	margin-top:16px;
}
/* for mobile */
@media screen and (max-width: 767px){
     .whatsapp-icon {
	 margin-top:10px;
     }
    .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
    }
}
	</style>
</head>
<body>
	<a href="https://wa.me/<?php echo $nom ;?>" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>
</html>

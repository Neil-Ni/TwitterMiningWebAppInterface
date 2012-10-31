<?php
	$core = $_POST['core'];
	$log_filename = $_POST['log_filename'];
	$server_name = $_POST['server_name'];
	$database_name = $_POST['database_name'];
	$address = $_POST['address'];
	$follow = $_POST['follow'];
	$track = $_POST['track'];
//	echo $core;
//	echo $log_filename; 
//	echo $server_nam ; 
//	echo $database_name; 
//	echo $address; 
//	echo $follow; 
//	echo $track;

//	$a = explode(",",$track);
//	foreach ($a  as $v) {
 //           echo $v;
  //      }
	if($core ==1){
		echo 'true';
	}
	$file = 'parameters.json';
//	chmod($file, 0666); 
// Open the file to get existing content
	$current = file_get_contents($file);
	$json_a=json_decode($current,true);
	$string = "{\n";
	for ($i = 1; $i < count($json_a)+1; $i++) {
	   $header = "qactweet"."$i";
	   $string.= "\t\"$header\" : ";
		$string.= "{\n";
		echo $i;
		if($core == i){
                	$string.="\t\t\"log_filename\" : \"$log_filename\",\n";
               		$string.="\t\t\"server_name\" : \"$server_name\",\n";
                	$string.="\t\t\"database_name\" : \"$database_name\",\n";
                	$to_addrs = explode(",",$address);
                	$string.= "\t\t\"to_addrs\" : [ \n";
                        	foreach ($to_addrs  as $v) {
                                	$string.= "\t\t\t\"$v\",\n";
                       		}
                	$string.= "\t\t],\n";
                	$follow = explode(",",$follow);
                	$string.= "\t\t\"follow\" : [ \n";
                        	foreach ($follow  as $v) {
                                	$string.= "\t\t\t\"$v\",\n";
                        	}
                	$string.= "\t\t],\n";
                	$track = explode(",",$track);
                	$string.= "\t\t\"track\" : [ \n";
                        	foreach ($track  as $v) {
                                	$string.= "\t\t\t\"$v\",\n";
                        	}
                	$string.= "\t\t],\n";
		}else{
		$log_filename =  $json_a[$header]["log_filename"];
		$string.="\t\t\"log_filename\" : \"$log_filename\",\n";
		$server_name = $json_a[$header]["server_name"];
		$string.="\t\t\"server_name\" : \"$server_name\",\n";
		$database_name = $json_a[$header]["database_name"];
		$string.="\t\t\"database_name\" : \"$database_name\",\n";	
		$to_addrs = $json_a[$header]["to_addrs"];
		$string.= "\t\t\"to_addrs\" : [ \n";
			foreach ($to_addrs  as $v) {
 		   		$string.= "\t\t\t\"$v\",\n";
			}
		$string.= "\t\t],\n";
		$follow = $json_a[$header]["follow"];
                $string.= "\t\t\"follow\" : [ \n";
                        foreach ($follow  as $v) {
                                $string.= "\t\t\t\"$v\",\n";
                        }
                $string.= "\t\t],\n";
		$track = $json_a[$header]["track"];
                $string.= "\t\t\"track\" : [ \n";
                        foreach ($track  as $v) {
                                $string.= "\t\t\t\"$v\",\n";
                        }
                $string.= "\t\t],\n";

		}
		$twitter_consumer_key = $json_a[$header]["twitter_consumer_key"];
		$string.="\t\t\"twitter_consumer_key\" : \"$twitter_consumer_key\",\n";

		$twitter_consumer_secret = $json_a[$header]["twitter_consumer_secret"];
		$string.="\t\t\"twitter_consumer_secret\" : \"$twitter_consumer_secret\",\n";
		$twitter_access_key = $json_a[$header]["twitter_access_key"];	
		$string.="\t\t\"twitter_access_key\" : \"$twitter_access_key\",\n";
       		$twitter_access_secret = $json_a[$header]["twitter_access_secret"];
		$string.="\t\t\"twitter_access_secret\" : \"$twitter_access_secret\",\n";
        	$placemaker_consumer_key = $json_a[$header]["placemaker_consumer_key"];
		$string.="\t\t\"placemaker_consumer_key\" : \"$placemaker_consumer_key\",\n";
        	$placemaker_consumer_secret = $json_a[$header]["placemaker_consumer_secret"];
		$string.="\t\t\"placemaker_consumer_secret\" : \"$placemaker_consumer_secret\",\n";
		$string.= "\t}\n";
	}
	$string.= "}\n";
	echo $string;
#       echo count($json_a); 
       $fp = fopen('results.json', 'w');

#       $string.= "     """
        $string.= "}\n";
//        echo $string;

        fwrite($fp, $string);
//	file_put_contents($fp, $string);
#       fwrite($fp, json_encode($json_a));

       fclose($fp);
# Append a new person to the file
#$current .= "John Smith\n";
#Write the contents back to the file
#file_put_contents($file, $current);
#       chmod($file, 0600); 
?>

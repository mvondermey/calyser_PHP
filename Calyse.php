
<?php

/**

    Template Name: My Own Template

    */

?>


<?php
echo "<h1> Current DBs </h1>";
$request = wp_remote_get('http://calyser.iriscouch.com/_all_dbs');
$response = wp_remote_retrieve_body( $request );

$_dbs = json_decode($response, true);

echo "<h2> Number of DBs </h2>";
$ndbs =  count($_dbs);
echo $ndbs;

echo "<h2>Dump </h2>";

var_dump($_dbs );

echo "<h2> Name of DBs </h2>";

for ($x=0; $x<$ndbs; $x++ ){
	echo "$_dbs[$x] <br>";
}

echo "<h2> Docs in User db </h2>";

$request = wp_remote_get('http://calyser.iriscouch.com/calyser/_all_docs');
$response = wp_remote_retrieve_body( $request );

$_docs = json_decode($response, true);
$ndocs = count($_docs);

echo "<h2> Dump docs </h2>";

echo "<br> 1 <br>";

var_dump($_docs);

echo "<br> 2 <br> Number of docs $ndocs";

echo "<h2> Docs </h2>";

echo is_array($docs[0]);

$x = 0;
foreach ( $_docs as $each_doc){
    $x++;
    echo "<h2>Member $x</h2>";
	if (is_array($each_doc)){
		
  	  while (list($key, $value) = each ($each_doc)) {                                    
        echo "Key $key: Value $value <br />";        
    }
	  
	} 
    else {
        echo "key($each_doc) ==> $each_doc";
    }	
}

echo "<h2>Done</h2>";



?>


<?php

// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
//phpinfo(INFO_MODULES);

?> 



<?php
 
//echo "Curl Init";

//$ch = curl_init();
 
//curl_setopt($ch, CURLOPT_URL, 'http://calyser.iriscouch.com/');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//	'Content-type: application/json',
//	'Accept: */*'
//));
 
//$response = curl_exec($ch);
 
//curl_close($ch);
 
//echo $response;

//$_response = json_decode($response, true);

//echo "Dump ";

//var_dump($_response );

/*

*/
?>



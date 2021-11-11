<pre>
<?php
if(isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['currency'])) {
    try {
		$objClient = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL", array('trace' => true));
		echo("<h2>A keresett időszak árfolyamai:" . "</h2>");
		$startDate=$_POST['startDate'];
		$endDate=$_POST['endDate'];
		$currency=$_POST['currency'];
		$currrates = $objClient->GetExchangeRates(array('startDate' => $startDate, 'endDate' => $endDate, 'currencyNames' => $currency))->GetExchangeRatesResult;
		$dom_root = new DOMDocument();
		$dom_root->loadXML($currrates);

		$searchNode = $dom_root->getElementsByTagName("Day");
		$dates = array ();
		$rates = array ();
		foreach( $searchNode as $searchNode ) {
			$date = $searchNode->getAttribute('date');
			$dates[]=$date;
			print $date . "\n";
			$rate = $searchNode->getElementsByTagName( "Rate" ); 
			foreach( $rate as $r ) {
				$rates[]=(int)$r->nodeValue;
				print "\t" . $r->getAttribute('unit') . " " ;
				print $r->getAttribute('curr');
				print "  =  ";
				print $r->nodeValue;
				print " HUF\n";
			}
		}
		
		$chartname = "Árfolyamok";
		include("chart.php");

    } catch (SoapFault $e) {
        var_dump($e);
    }
} else{
	try {
		echo("<h2>A mai (" . date("Y-m-d") . ") valuta árfolyamok (szombaton és vasárnap nem jelenít meg adatot):</h2>");
		$objClient = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL", array('trace' => true));
		$currency="EUR,USD,CHF";
		$currrates = $objClient->GetExchangeRates(array('startDate' => date("Y-m-d"), 'endDate' => date("Y-m-d"), 'currencyNames' => $currency))->GetExchangeRatesResult;
			$dom_root = new DOMDocument();
			$dom_root->loadXML($currrates);

			$searchNode = $dom_root->getElementsByTagName("Day");
			
			
			foreach( $searchNode as $searchNode ) {
				$date = $searchNode->getAttribute('date');
				print $date . "\n";
				$rate = $searchNode->getElementsByTagName( "Rate" ); 
				foreach( $rate as $r ) {
					print "\t" . $r->getAttribute('unit') . " " ;
					print $r->getAttribute('curr');
					print "  =  ";
					print $r->nodeValue;
					print " HUF\n";
				}
			}

    } catch (SoapFault $e) {
        var_dump($e);
    }
}
?>
</pre>


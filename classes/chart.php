<div class="chart">
	<canvas id="myChart"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<script >
//src="./classes/chart.js"
var chartname="<?=$chartname?>";
const ctx = document.getElementById("myChart").getContext("2d");

var labels = 
    <?php echo '["' . implode('", "', $dates) . '"]' ?>;

var rates = 
    <?php echo '["' . implode('", "', $rates) . '"]' ?>;
	
console.log(rates);	

const data={
	labels,
	datasets: [
		{
		data: rates,
		label: chartname,
		},
	],
};

const config = {
	type: "line",
	data: data,
	options:{
		responsive: true,
	}
};

const myChart = new Chart(ctx, config);
</script>
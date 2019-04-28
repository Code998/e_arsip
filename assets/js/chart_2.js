$(document).ready(function(){
	$.ajax({
		url: "../../data_action_chart_sm.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var g = [];
			var s = [];

			for(var i in data){
				g.push(data[i].guide);
				s.push(data[i].jumlah);
			}

			var options = {
			    scales: {
			        yAxes: [{
			            display: true,
			            ticks: {
			                beginAtZero: true,
			                max: 5,
			                min: 0
			            }
			        }],
			        xAxes: [{
			        	categoryPercentage: 0.4,
			        	barPercentage: 0.4
			        }]
			    }
			};

			var chartdata = {
				labels: g,
				datasets : [
					{
						label : ["Guide Surat Masuk"],
						backgroundColor: ["#34495e", "#95a5a6", "#ecf0f1"],
						data: s
					}
				]
			};

			var ctx = $("#canv");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				options: options
			});
		},
		error: function(data) {
			console.log(data);
		}
	})
});
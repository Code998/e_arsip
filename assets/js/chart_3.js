$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8000/data_action_chart_sk.php",
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
						label : ["Guide Surat Keluar"],
						backgroundColor: ["#1abc9c", "#f39c12", "#c0392b", "#2980b9"],
						data: s
					}
				]
			};

			var ctx = $("#canva");

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
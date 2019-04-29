$(document).ready(function(){
	$.ajax({
		url: "../../data_action_chart.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var p = [];
			var s = [];

			for(var i in data){
				p.push(data[i].jenis);
				s.push(data[i].jumlah);
			}

			var options = {
			    scales: {
			        yAxes: [{
			            display: true,
			            ticks: {
			                beginAtZero: true,
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
				labels: p,
				datasets : [
					{
						label : ["Surat M/K"],
						backgroundColor: ["#e74c3c", "#3498db"],
						data: s
					}
				]
			};

			var ctx = $("#mycanvas");

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
$(document).ready(function(){
	$.ajax({
		url: "http://localhost/Akhil/Admin/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var dates = [];
			var user = [];

			for(var i in data) {
				dates.push("    " + data[i].dates);
				user.push(data[i].user);
			}

			var chartdata = {
				labels: dates,
				datasets : [
					{
						label: 'Earning Records',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: user
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
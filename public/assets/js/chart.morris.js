$(function(){	
	/* Morris Line Chart */
	if ($('#morrisBar').length > 0) {
		window.mL = Morris.Bar({
			element: 'morrisBar',
			data: [
				{ y: 'Govt.', a: 356},
				{ y: 'Private', a: 233},
				{ y: 'Deemed', a: 49},
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Colleges'],
			lineColors: ['#1b5a90','#ff9d00'],
			lineWidth: 1,
			gridTextSize: 10,
			hideHover: 'auto',
			resize: true,
			redraw: true
		});
		$(window).on("resize", function(){
			mL.redraw();
		});
	}

});
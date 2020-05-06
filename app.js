const url = 'https://metals-api.com/api/latest';
const tableCells = document.querySelectorAll(".info");

document.addEventListener("DOMContentLoaded", async () => {
	
	if (sessionStorage.getItem("zloto")) {
		const {zloto, srebro, pallad, platyna} = sessionStorage;
		const arr = [zloto, srebro, pallad, platyna];
		tableCells.forEach((el, index) => el.innerText = arr[index])
	} else {
		await fetch(url)
		   .then(res => res.json())
		   .then(data => {
				const {rotation_period, orbital_period, diameter, surface_water} = data.results[0];
				const arr = [rotation_period, orbital_period, diameter, surface_water];
				sessionStorage.setItem('zloto', rotation_period);
				sessionStorage.setItem('srebro', orbital_period);
				sessionStorage.setItem('pallad', surface_water);
				sessionStorage.setItem('platyna', diameter);
	
			   tableCells.forEach((el, index) => el.innerText = arr[index]);
		   })
		}

	const ctx = document.querySelector(".chart").getContext('2d');
	const chart = new Chart(ctx, {
		type: 'line',
	
		data: {
			labels: [ 'Złoto', 'Srebro', 'Pallad', 'Platyna' ],
			datasets: [
				{
					label: 'Ceny rynkowe',
					backgroundColor: 'rgba(218, 165, 32, 0.7)',
					borderColor: 'black',
					data: [ 200, 1500, 150, 2500 ]
				}
			]
		},
	
		options: {}
	});
});

const ctx = document.querySelector('.chart').getContext('2d');
const myChart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ['Złoto', 'Pallad', 'Srebro', 'Platyna'],
      datasets: [
         {
            label: 'Ceny metali szlachetnych',
            data: [245, 678, 134, 237],
            backgroundColor: [
               'rgba(150, 129, 12, 0.7)',
               'rgba(150, 129, 12, 0.7)',
               'rgba(150, 129, 12, 0.7)',
               'rgba(150, 129, 12, 0.7)',
            ],
            borderColor: [
               'rgba(255,255,255, 0.4)',
               'rgba(255,255,255, 0.4)',
               'rgba(255,255,255, 0.4)',
               'rgba(255,255,255, 0.4)',
            ],
            borderWidth: 1
         },
      ],
   },
   options: {
      scales: {
         yAxes: [
            {
               ticks: {
                  beginAtZero: true,
               },
            },
         ],
      },
   },
});



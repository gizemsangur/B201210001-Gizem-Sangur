const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': 'a4bf40044dmsh0460113a0b91239p155ed0jsn14a27cc4aec4'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=Lord%20%20Of%20%20The%20Rings', options)
	.then(response => response.json())
	.then(data => {
        const list = data.d;

        list.map((item) =>{
            const name=item.l;
            const poster=item.i.imageUrl;
            const movie='<li><img src="${poster}"> <h2>${name}</h2></li>'
            document.querySelector('#movies').innerHTML += movie;
        })
    })
	.catch(err => {
        console.error(err)
    });

            
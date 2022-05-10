
function apicall(){
	$.getJSON(' http://www.omdbapi.com/?t=lord+of+the+rings&apikey=909e31ba').then(function(response){
		var image=response.Poster;
		console.log(response)
		var name=response.Title;
		var actors=response.Actors;
		var imdb=response.imdbRating;
		var award=response.Awards;
		var plot=response.Plot;
		var writer=response.Writer;
		$('.lotr').attr('src',image);
		document.querySelector('#actornames').innerHTML+=actors;
		document.querySelector('#imdbrating').innerHTML+=imdb;
		document.querySelector('#moviename').innerHTML+=name;
		document.querySelector('#awards').innerHTML+=award;
		document.querySelector('#plot').innerHTML+=plot;
		document.querySelector('#writer').innerHTML+=writer;
		
	});
	$.getJSON(' http://www.omdbapi.com/?t=lord+of+the+rings+the+two+towers&apikey=909e31ba').then(function(response){
		var image=response.Poster;
		var name=response.Title;
		var actors=response.Actors;
		var imdb=response.imdbRating;
		var award=response.Awards;
		var plot=response.Plot;
		var writer=response.Writer;
		$('.lotr1').attr('src',image);
		document.querySelector('#actornames1').innerHTML+=actors;
		document.querySelector('#imdbrating1').innerHTML+=imdb;
		document.querySelector('#moviename1').innerHTML+=name;
		document.querySelector('#awards1').innerHTML+=award;
		document.querySelector('#plot1').innerHTML+=plot;
		document.querySelector('#writer1').innerHTML+=writer;
		
	});
	$.getJSON(' http://www.omdbapi.com/?t=lord+of+the+rings+the+return+of+the+king&apikey=909e31ba').then(function(response){
		var image=response.Poster;
		var name=response.Title;
		var actors=response.Actors;
		var imdb=response.imdbRating;
		var award=response.Awards;
		var plot=response.Plot;
		var writer=response.Writer;
		$('.lotr2').attr('src',image);
		document.querySelector('#actornames2').innerHTML+=actors;
		document.querySelector('#imdbrating2').innerHTML+=imdb;
		document.querySelector('#moviename2').innerHTML+=name;
		document.querySelector('#awards2').innerHTML+=award;
		document.querySelector('#plot2').innerHTML+=plot;
		document.querySelector('#writer2').innerHTML+=writer;
	});	
	$.getJSON(' http://www.omdbapi.com/?t=doctor+who&apikey=909e31ba').then(function(response){
		console.log(response)
		var image=response.Poster;
		var name=response.Title;
		var actors=response.Actors;
		var imdb=response.imdbRating;
		var award=response.Awards;
		var plot=response.Plot;
		var writer=response.Writer;
		$('.doctor').attr('src',image);
		document.querySelector('#dactornames').innerHTML+=actors;
		document.querySelector('#dimdbrating').innerHTML+=imdb;
		document.querySelector('#dawards').innerHTML+=award;
		document.querySelector('#dplot').innerHTML+=plot;
		document.querySelector('#dwriter').innerHTML+=writer;
	});	
	$.getJSON(' http://www.omdbapi.com/?t=lord+of+the+rings&apikey=909e31ba').then(function(response){
		var image=response.Poster;
		console.log(response)
		var name=response.Title;
		var actors=response.Actors;
		var imdb=response.imdbRating;
		var award=response.Awards;
		var plot=response.Plot;
		var writer=response.Writer;
		$('.lord').attr('src',image);
		document.querySelector('#lactornames').innerHTML+=actors;
		document.querySelector('#limdbrating').innerHTML+=imdb;
		document.querySelector('#lawards').innerHTML+=award;
		document.querySelector('#lplot').innerHTML+=plot;

		
	});
}

apicall();
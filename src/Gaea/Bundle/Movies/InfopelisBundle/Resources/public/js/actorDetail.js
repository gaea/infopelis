function dinamicClearFix(itm, countFixColumn) {
	countFixColumn++;
	
	$(itm).show("slow");
	addClearFixDiv(countFixColumn, $(itm).parent());
	
	return countFixColumn;
}

function addClearFixDiv(idx, $itm) {
	if(idx % 3 == 0) {
		$("<div class='clearfix visible-sm'></div>").insertAfter($itm);
	}
	
	if(idx % 4 == 0) {
		$("<div class='clearfix visible-md visible-lg'></div>").insertAfter($itm);
	}
}

function removeClearFixDivs() {
	$('#movies>div').each(function(idx, itm) {
		$(itm).remove();
	});
}

function checkMoviesFound(countFixColumn) {
	if(countFixColumn > 0) {
		$("#noMoviesFoundDiv").addClass("hidden");
	}
	else {
		$("#noMoviesFoundDiv").removeClass("hidden");
	}
}

function changePositions($objests, idx1, idx2) {
	$var1 = $objests.get(idx1);
	$var2 = $objests.get(idx2);
	$($objests.get(idx1)).insertBefore($($objests.get(idx2)));
	$($objests.get(idx2)).insertBefore($($objests.get(idx1+1)));
}

function showAllMovies() {
	var countFixColumn = 0;
	
	removeClearFixDivs();
	
	$('#movies div').each(function(idx, itm) {
		if($(itm).children("h5").length > 0) {
			countFixColumn = dinamicClearFix(itm, countFixColumn);
		}
	});
	
	checkMoviesFound(countFixColumn);
}

function filterMovies() {
	var searchMovieField = $('#searchMovieField').val();
	var countFixColumn = 0;
	
	removeClearFixDivs();
	
	$('#movies div').each(function(idx, itm) {
		if($(itm).children("h5").length > 0) {
			movieTitle = $(itm).children("h5").context.firstElementChild.textContent;
			if(movieTitle.toLowerCase().indexOf(searchMovieField.toLowerCase()) == -1) {
				$(itm).hide("slow");
			}
			else {
				countFixColumn = dinamicClearFix(itm, countFixColumn);
			}
		}
	});
	
	checkMoviesFound(countFixColumn);
}

function orderMoviesBy() {		
	removeClearFixDivs();
	
	var arrayMoviesSize = $('#movies>a').length -1;
	
	for(var i=0; i<arrayMoviesSize/2; i++) {
		changePositions($('#movies>a'), i, arrayMoviesSize - i);
	}
	
	var visibleMovies = 0;
	$('#movies>*').each(function(idx, itm) {
		var foundVisibleMovie = false;
		
		if($(itm).context.firstElementChild.attributes.length < 2) {
			visibleMovies++;
			foundVisibleMovie = true;
		}
		else {
			if($(itm).context.firstElementChild.attributes[1].nodeValue == '' || $(itm).context.firstElementChild.attributes[1].nodeValue == 'display: block;') {
				visibleMovies++;
				foundVisibleMovie = true;
			}
		}
		
		if(visibleMovies > 0 && foundVisibleMovie) {
			addClearFixDiv(visibleMovies, $(itm));
		}
	});
}

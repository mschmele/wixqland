$(document).ready(function() {
	var isPlaying = false;
	var isMuted = false;
	var notWatching = true;
	var vidStreamPlaceholder = 'http://farm3.static.flickr.com/2685/4218539270_d72baeee60_z.jpg';
	var vidStreamPlaceholder2 = 'http://i.imgur.com/jSTMtGM.png';
	var vidStream = 'http://166.66.176.181:8080/1/stream.mjpg';
	var audio = $('#audioStream')[0];
	var womboCombo = $('#womboCombo')[0];


/*********** EVENT LISTENERS *************/
	var easter_egg = new Konami();
	easter_egg.code = function() { womboCombo.play(); }
	easter_egg.load();
	
	fartscroll(200);

	$('#dvBody').on('click', '#dvFancyPlayer', function (e) {
		isPlaying = !isPlaying;
		(isPlaying) ? audio.play() : audio.pause();

		$(this).find('span').toggleClass('glyphicon-play').toggleClass('glyphicon-pause');
	});

	$("document").ready(function(){
		$(".php-json-submit").submit(function() {
			var data = { "action" : "test" };
		
			data = $(this).serialize() + "&" + $.param(data);
			$.ajax( {
				type: "POST",
				dataType: "json",
				url: "request.php",
				data: data,
				success: function (data) {
					$("#request-received").html("Song: " + data["song"] + "<br />Artist: " + data["artist"] + "<br />Requester: " + data["requester"]);
					alert("REQUEST SUBMITTED\n" + data["json"]);
				}

			});
			return false;
		});

	});

	$('#dvPGridLabel, #dvProgramGrid').on('click', function () {
		if (notWatching) {
			$('#dvProgramGrid').find('img').attr('src', vidStream);
			$('#dvProgramGrid > img').toggleClass('watching').toggleClass('not-watching');
			notWatching = !notWatching;
			
		} else {
			$('#dvProgramGrid').find('img').attr('src', vidStreamPlaceholder);
			$('#dvProgramGrid > img').toggleClass('not-watching').toggleClass('watching');
			notWatching = !notWatching;
		}
	});
});
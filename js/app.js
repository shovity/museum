$('document').ready(function () {
	
	/**
	*
	* Menu right
	*/
	var Menu = function () {
		var menuIcon = $('#menu-icon');
		var menu = $('#menu');
		var open = false;

		this.open = function () {
			menu.css({"left": "15%"});
			menuIcon.attr("class", "close");
			open = true;
		}

		this.close = function () {
			menu.css({"left": "100%"});
			menuIcon.attr("class", "");
			open = false;
		}

		this.isOpen = function () {
			return open;
		}

		return this;
	}

	/**
	*
	* Player
	*/

	var Player = function () {
		var audio = $('#audio');
		var playIcon = $('#player .controls');
		var progress = $('#player .progress');
		var playing = false;


		this.play = function () {
			playing = true;
			document.getElementById('audio').play();
			playIcon.attr("class", "controls pause");

		}

		this.pause = function () {
			playing = false;
			document.getElementById('audio').pause();
			playIcon.attr("class", "controls play");
		}

		this.isPlaying = function () {
			return playing;
		}
		return this;
	}

	var winW = $(window).width();
	var menu = new Menu();
	var player = new Player();

	// fix progress width
	$('#player .progress').css({"width": winW - 60});

	$('#menu-icon').click(function () {
		if (menu.isOpen()) {
			menu.close();
		} else {
			menu.open();
		}
	});

	$('#player .controls').click(function () {
		if (player.isPlaying()) {
			player.pause();
		} else {
			player.play();
		}
	})

	$.get('tt');
});
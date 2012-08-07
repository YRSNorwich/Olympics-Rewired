$(document).ready(function () {
	$('a').click(function(){
		loadcards();
	});
});

function loadcards(){
	$.ajax({
		url: 'getcards.php',
		beforeSend: function() {
			$('.bois').html('<img src="loading.gif" />');
		},
		success: function() {
			$('.bois').html('');
		},
		error: function() {
			$('.bois').html('<img class="error" width="100" height="100" src="http://www.host1plus.com/blog/wp-content/uploads/2012/01/21.png" />');
			alert('there was an error!');
		}
	}); 
	var cards = {
		you: [
			{
				id: 1
			},
			{
				id: 2
			}
		],
		opponent: [
			{
				id: 3
			},
			{
				id: 4
			}
		]
	};

	$.each(cards.you, function(index, value) {
		console.log(index);
		console.log(value);
	});

	$.each(cards.opponent, function(index, value) {
		console.log(index);
		console.log(value);
	});

	$.each(cards.you, function(){
   		this.id;
   		$('#hand1').append('<section id="' + this.id + '"><p>' + this.id + '</p></section>');
	});

}



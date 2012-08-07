$(document).ready(function () {
	//  $('a').click(function(){
		loadcards();
	//  });
});

function loadcards(){
	/* $.ajax({
		url: 'getcards.php',
		beforeSend: function() {
			$('.bois').html('<img src="loading.gif" />');
		},
		success: function() {
			$('.bois').html('');
		},
		error: function() {
			$('.bois').html('<img class="error" width="100" height="100" src="http://www.host1plus.com/blog/wp-content/uploads/2012/01/21.png" />');
			alert('There was an error!');
		}
	}); */

	$('#card1').hide();

	var cards = {
		you: [
			{
				id: 1,
				country_name: 'Canada',
				country_code: 'CA',
				continent: 'Americas'
			},
			{
				id: 2,
				country_name: 'Great Britain',
				country_code: 'GB',
				continent: 'Europe'
			},
			{	id: 3,
				country_name: 'Germany',
				country_code: 'DE',
				continent: 'Europe'
			}
		],
		opponent: [
			{
				id: 4,
				country_name: 'North Korea',
				country_code: 'NK',
				continent: 'Asia'
			},
			{
				id: 5,
				country_name: 'Belize',
				country_code: 'BL',
				continent: 'Asia'

			},
			{	
				id: 6,
				country_name: 'Bermuda (Overseas Territory)',
				country_code: 'BU',
				continent: 'Americas'
			}
		]
	};

var your_cards = [];
var ids = [];
var rannum = Math.floor(Math.random()*4);
	
	$.each(cards.you, function(index, value){
		$('#hand1').append('<ul>');
   		$('#hand1').append('<li>' + value.country_name + '</li>');
   		$('#hand1').append('<li>' + value.country_code + '</li>');
   		$('#hand1').append('<li>' + value.continent + '</li>');
   		$('#hand1').append('</ul>');
   		$('#hand1').append('<br>');

   		your_cards[value.id] = {
   			country_code: value.country_code,
   			country_name: value.country_name,
   			continent: value.continent,
   		};

   		ids.push(value.id);
 	});
	
// $('#carduno' + value[rannum]).show();

}

// http://joshuagoodw.in/getcards.php


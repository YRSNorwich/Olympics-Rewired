$(document).ready(function () {
	//  $('a').click(function(){
		loadcards();
	//  });
	$.getJSON('getscards.json.php', function(data){
	});
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

	// $('#card1').hide();

	var cards = {
		you: [
			{
				id: 1,
				country_name: 'Canada',
				country_code: 'CA',
				continent: 'Americas',
				gold: '6',
				silver: '12',
				bronze: '2'
			},
			{
				id: 2,
				country_name: 'Great Britain',
				country_code: 'GB',
				continent: 'Europe',
				gold: '11',
				silver: '10',
				bronze: '29'
			},
			{	id: 3,
				country_name: 'Germany',
				country_code: 'DE',
				continent: 'Europe',
				gold: '3',
				silver: '9',
				bronze: '7'
			}
		],
		opponent: [
			{
				id: 4,
				country_name: 'North Korea',
				country_code: 'NK',
				continent: 'Asia',
				gold: '3',
				silver: '3',
				bronze: '7'
			},
			{
				id: 5,
				country_name: 'Belize',
				country_code: 'BL',
				continent: 'Asia',
				gold: '9',
				silver: '13',
				bronze: '8'
			},
			{	
				id: 6,
				country_name: 'Bermuda (Overseas Territory)',
				country_code: 'BU',
				continent: 'Americas',
				gold: '20',
				silver: '21',
				bronze: '2'
			}
		]
	};

var your_cards = [];
var ids = [];
var rannum = Math.floor(Math.random()*4);
cards.you.length;

	$.each(cards.you, function(index, value){
		$('section.data').append('<ul>');
   		$('section.data').append('<li>' + value.country_name + ', ' + value.country_code + ', ' + value.continent + '.</li>');
   		$('section.data').append('<li>Gold: ' + value.gold + '</li>');
   		$('section.data').append('<li>Silver: ' + value.silver + '</li>');
   		$('section.data').append('<li>Bronze: ' + value.bronze + '</li>');
   		$('section.data').append('</ul>');
   		$('section.data').append('<br>');

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

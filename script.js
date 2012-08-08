var HAND_SIZE = 5;

/**
 * deal HAND_SIZE cards to two hands
 */
function deal(deck){
	debugger;
	var hands = {mine:[], yours:[]};

	$.each(hands, function(k, v){
		while (v.length < HAND_SIZE) {
			v.push(deck.pop());
		}
	});
	

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

$(document).ready(function () {
	$.ajax({
		url:'http://yrsolympics2.phpfogapp.com/php/newcards.json.php', 
		data: {hand_size: HAND_SIZE*2},
		success: deal,
		dataType: 'jsonp'
	});
	//entry = data[Math.floor(Math.random()*data.length)];
});

/* jQuery.removeFromArray = function(value, arr) {
    return jQuery.grep(arr, function(elem, index) {
        return elem !== value;
    });
};

function(args){
 	var me=this;
 	$.getJSON(args.json,function(data) { 
 	me.set(args);
 	$.each(data, function(i){
    var id="randomizr_item_" + i;
    var temp= $('<div id='+ id +' class="randomizr-grid-items"><img src="'+ this.imageSmall[0]  +'" /></div>');
    me.config.container.append(temp);
    this.target=$(temp);
}); */



// http://joshuagoodw.in/getcards.php

var HAND_SIZE = 5,
	hands = {mine:[], yours:[]},
	table = {mine:null, yours:null},
	game = $({});

/**
 * deal HAND_SIZE cards to two hands
 */
function deal(deck){
	$.each(hands, function(k, v){
		while (v.length < HAND_SIZE) {
			v.push(deck.pop());
		}
	});
	game.trigger('dealCompleted');
};

function play(player) {
	var card = hands[player].pop(),
		card_ui = $('#'+player),
		data_ui = $('.data', card_ui);

		table[player] = card;

		data_ui.append('<ul>');
   		data_ui.append('<li>' + value.country_name + ', ' + value.country_code + ', ' + value.continent + '.</li>');
   		data_ui.append('<li>Gold: ' + value.gold + '</li>');
   		data_ui.append('<li>Silver: ' + value.silver + '</li>');
   		data_ui.append('<li>Bronze: ' + value.bronze + '</li>');
   		data_ui.append('</ul>');
   		data_ui.append('<br>');

   		game.trigger('cardPlayed', {player:player, card:card});

	// $('#carduno' + value[rannum]).show();
}

$(document).ready(function () {
	$.ajax({
		url:'./php/newcards.json.php', 
		data: {hand_size: HAND_SIZE*2},
		success: deal,
		dataType: 'jsonp'
	});

	game.bind('dealCompleted', function(){
		play('mine');
	});

	game.bind('cardPlayed', function(evt){
		console.log(evt);
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

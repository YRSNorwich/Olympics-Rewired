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
   		data_ui.append('<li>' + card.country_name + ', ' + card.country_code + '.</li>');
   		data_ui.append('<li>Gold: ' + card.medals_gold + '</li>');
   		data_ui.append('<li>Silver: ' + card.medals_silver + '</li>');
   		data_ui.append('<li>Bronze: ' + card.medals_bronze + '</li>');
   		data_ui.append('<li>Endangered Species: ' + card.endangered_species + '</li>');
   		data_ui.append('<li>Military Personnel: ' + card.military_personnel + '</li>');
   		data_ui.append('</ul>');
   		data_ui.append('<br>');

   		game.trigger('cardPlayed', {player:player, card:card});

	// $('#carduno' + value[rannum]).show();
}

$(document).ready(function () {
	game.bind('dealCompleted', function(){
		play('mine');
	});

	game.bind('cardPlayed', function(evt){
		console.log(evt);
	});
	// $.ajax({
	// 	url:'./php/newcards.json.php', 
	// 	data: {hand_size: HAND_SIZE*2},
	// 	success: deal,
	// 	dataType: 'jsonp'
	// });

    deal([{"0":"112","id":"112","1":"eg","country_code":"eg","2":"Egypt","country_name":"Egypt","3":"0","medals_gold":"0","4":"1","medals_silver":"1","5":"0","medals_bronze":"0","6":"120","endangered_species":"120","7":"468500","military_personnel":"468500"},{"0":"95","id":"95","1":"ch","country_code":"ch","2":"Switzerland","country_name":"Switzerland","3":"1","medals_gold":"1","4":"1","medals_silver":"1","5":"0","medals_bronze":"0","6":"48","endangered_species":"48","7":"22823","military_personnel":"22823"},{"0":"108","id":"108","1":"id","country_code":"id","2":"Indonesia","country_name":"Indonesia","3":"0","medals_gold":"0","4":"1","medals_silver":"1","5":"1","medals_bronze":"1","6":"1126","endangered_species":"1126","7":"302000","military_personnel":"302000"},{"0":"74","id":"74","1":"kp","country_code":"kp","2":"Democratic People's Republic of Korea","country_name":"Democratic People's Republic of Korea","3":"4","medals_gold":"4","4":"0","medals_silver":"0","5":"1","medals_bronze":"1","6":"48","endangered_species":"48","7":"110600","military_personnel":"110600"},{"0":"64","id":"64","1":"cn","country_code":"cn","2":"People's Republic of China","country_name":"People's Republic of China","3":"31","medals_gold":"31","4":"17","medals_silver":"17","5":"14","medals_bronze":"14","6":"841","endangered_species":"841","7":"218500","military_personnel":"218500"},{"0":"96","id":"96","1":"ir","country_code":"ir","2":"Islamic Republic of Iran","country_name":"Islamic Republic of Iran","3":"1","medals_gold":"1","4":"0","medals_silver":"0","5":"1","medals_bronze":"1","6":"86","endangered_species":"86","7":"523000","military_personnel":"523000"},{"0":"117","id":"117","1":"gr","country_code":"gr","2":"Greece","country_name":"Greece","3":"0","medals_gold":"0","4":"0","medals_silver":"0","5":"2","medals_bronze":"2","6":"131","endangered_species":"131","7":"156600","military_personnel":"156600"},{"0":"77","id":"77","1":"nz","country_code":"nz","2":"New Zealand","country_name":"New Zealand","3":"3","medals_gold":"3","4":"0","medals_silver":"0","5":"4","medals_bronze":"4","6":"150","endangered_species":"150","7":"9278","military_personnel":"9278"},{"0":"113","id":"113","1":"gt","country_code":"gt","2":"Guatemala","country_name":"Guatemala","3":"0","medals_gold":"0","4":"1","medals_silver":"1","5":"0","medals_bronze":"0","6":"233","endangered_species":"233","7":"15500","military_personnel":"15500"},{"0":"66","id":"66","1":"gb","country_code":"gb","2":"Great Britain","country_name":"Great Britain","3":"16","medals_gold":"16","4":"11","medals_silver":"11","5":"10","medals_bronze":"10","6":"72","endangered_species":"72","7":"160280","military_personnel":"160280"}]);

	
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

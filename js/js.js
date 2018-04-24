$(document).ready(function() {
	
	// variavles for weapons 
	var apiItemURL  = 'https://api.guildwars2.com/v2/items';
	var apiLegend = '?ids=30698, 30699, 30686, 30696, 30697, 30684, 30702, 30687, 30690, 30685, 30701, 30701, 30691, 30695, 30688, 30692, 30694, 30693, 30700, 30703, 30704';
	var apiPres = '?ids=29178,29177,29179,29166,29184,29167,29170,29172,29183,29171,29176,29168,29173,29175,29174,29182,29169,29185,29180,29181';
	var apiContracts = '?ids=35984,38507,35985,35986,78455,70010';
	var apiAuras = '?ids=74491,68440,77310,79647,67375,67370,67372,79665,79978';
	var apiMinis = '?ids=42402,37207,20159,37206,37208';
	var apiSkins = '?ids=36339,36334';
	var apiComm  = 'https://api.guildwars2.com/v2/commerce/prices';
	var aipGemexchangeURl = 'https://api.guildwars2.com/v2/commerce/exchange/gems?quantity=';
	var legendaries = [30698, 30699, 30686, 30696, 30697, 30684, 30702, 30687, 30690, 30685, 30701, 30701, 30691, 30695, 30688, 30692, 30694, 30693, 30700, 30703, 30704];
	var colCount = 1;

	// Add commas to big numbers
	function numberWithCommas(x) { 
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
	}

	/**
	 * Formats the sell value as "Ng Ns Nc" to match the ingame display string.
	 * Borrowed code form Gw2 Spidy
	 */
	var formatGW2Money = function(copper) {
		var goldImg   = '<i class="gw2money-gold"></i>';
		var silverImg = '<i class="gw2money-silver"></i>';
		var copperImg = '<i class="gw2money-copper"></i>';

		var string = "";

		if ( negative = copper < 0 ) {
			copper *= -1;
		}

		// Calculate the gold
		var gold = Math.floor( copper / 10000 );
		if( gold ){
			copper = copper % ( gold * 10000 );
			gold = negative ? gold * -1 : gold;
			
			// Add to the string
			string += '<span class="goldText">' + numberWithCommas(gold) + "</span> " + goldImg + " ";
		}

		// Calculate the silver
		var silver = Math.floor(copper / 100);
		if (silver) {
			copper = copper % (silver * 100);
			silver = negative ? silver*-1 : silver;

			string += '<span class="silverText">' + silver + "</span> " + silverImg + " ";
		}

		if (copper) {
			// round copper by 2 digits
			copper = Math.round(copper * 100) / 100;
			copper = negative ? copper*-1 : copper;

			string += '<span class="copperText">' + copper + "</span> " + copperImg + " ";
		}

		string = string.replace(/( )+$/, '');

		return (!string ? "0 " + copperImg : string);
	};

	/***************************************************
	* Function to creat prices grid
	* url: Url to fetch json from
	* col: Colum size 
	* container: Container to wich to append data to.
	* name: name of the container
	***************************************************/
	function loadPrizeGrid( url, col, container, name ) {
		$(function(){
			$.getJSON( url, function(data) {
				// The loop 
				$.each( data, function( index, value ) { // value is the id number
					// Append HTML to the Container
					$( container ).append(   '\
						<div class="'+ col +' col-centered">\
							<div class="toolbox '+ name +'" id="' + value['id'] + '">\
								<img src="' + value['icon'] + '" class="round-legendary-icon icon">\
								<div class="toolboxText" id="tooltip_'+ value['id'] + '">\
									<img src="./images/loading.gif" class="loading">\
								</div>\
							</div>\
						</div>');
				}); // end loop 
			}); // end getJSON
		}); // end function	
	} // end function


	/***************************************************
	* Function to get the total of a group of prize items
	* url: Url to fetch json data from
	* totalBuyElement: Element in which the buy date goes
	* totalSellElement: Element in which the sell data goes
	* totalSupplyDemandElement: Element for supply/demand
	* 							Only for Legendaries
	***************************************************/
	function itemTotal( url, totalBuyElement, totalSellElement, totalSupplyDemandElement = null ){
		$.getJSON( url, function( data ) {
			var sell = 0;
			var buy  = 0;
			var supplyTotal = 0;
			var demandTotal = 0;
			
			// The loop 
			$.each( data, function( index, g ) { // value is the id number
				buy  += g['buys']['unit_price'];
				sell += g['sells']['unit_price'];
				supplyTotal += g['sells']['quantity'];;
				demandTotal += g['buys']['quantity'];
				
			}); // end loop 
			
			$( totalBuyElement ).append( formatGW2Money( buy ) );
			$( totalSellElement ).append( formatGW2Money( sell ) );
			//if( totalSupplyDemandElement != null )
			//	$( totalSupplyDemandElement ).append( 'Total Legendary Supply: <span class="common-text">' + numberWithCommas( supplyTotal ) + '</span><br><br> Total Legendary Demand: <span class="common-text">' +  numberWithCommas( demandTotal ) + '</span>' );
		}); // end getJSON			
	}; // end function	

	/***************************************************
	* Function to get Trading post data.
	* url: Url to fetch json data from
	* id: Id of item to look for
	***************************************************/
	function tpData(  id ) {
		$.getJSON( apiComm + '/' + id , function( price ) {
			var tpTable = '\
				<table class="fuill-width">\
					<tbody>\
						<tr class="tr_even">\
						<th class="td_head full-width" colspan="2">Tading Post:</th>\
						</tr>\
						<tr class="tr_odd">\
							<td class="td_left">Sell: </td>\
							<td class="sell_'+ id +' td_right"> ' + formatGW2Money( price['sells']['unit_price'] ) +' </td>\
						</tr>\
						<tr class="tr_even">\
							<td class="td_left">Buy: </td>\
							<td class="buy td_right"> '+ formatGW2Money( price['buys']['unit_price'] ) +'</td>\
						</tr>\
						<tr class="tr_odd">\
							<td class="td_left">Supply: </td>\
							<td class="supply td_right">'+ numberWithCommas( price['sells']['quantity'] ) +'</td>\
						</tr>\
						<tr class="tr_even">\
							<td class="td_left">Demand: </td>\
							<td class="demand td_right">'+ numberWithCommas( price['buys']['quantity'] ) +'</td>\
						</tr>\
					</tbody>\
				</table>\
			  </span>\
			</div>';
			$('#tooltip_' + id ).append( tpTable );
		}).done(function() { return; }) // end getJSON 	
	}; // end function	

	/***************************************************
	* Function mouseEnterBox
	***************************************************/
	function mouseEnterBox( elementName) {
		$( document.body ).on( "mouseenter touchstart", elementName, function() {
			
			var id = $(this).attr( 'id' ); // The Id
			var attributes = ''; // Start empty attributes
			var weaponSrenth = '';
			var reqLevel = '';
			var desc = '';
			// Lets gather info about this item
			$(function(){
				$.getJSON( apiItemURL + '/' + id, function( item ) {
					
					if( item['details']['infix_upgrade'] && item['details']['infix_upgrade']['id'] != undefined ){
						$.each( item['details']['infix_upgrade']['attributes'], function( index, v ) {
							attributes += '<div class="masterwork-text">+' + v['modifier'] + ' ' + v['attribute'] + '</div>';
						});
					}
					
					// check to see if weapon has strengh
					if( item['details']['min_power'] != undefined )
						weaponSrenth = '<div>Weapon Strength: <span class="masterwork-text">' + numberWithCommas( item['details']['min_power'] ) + " - " + numberWithCommas( item['details']['max_power'] ) + '</span></div>';
					
					// check to see if weapon has level
					if( item['level'] != 0 )
						reqLevel = '<div class="level">Required level: ' + item['level'] + '</div>';
					
					// check to see if weapon has description
					if( item['description'] != undefined )
						desc = '<div>' + item['description'] + '</div>';							
					
					// Sigil slot 
					//var sigilSlot = item['details']['secondary_suffix_item_id'] != undefined ? '<div class="upgrade"><img src="https://wiki.guildwars2.com/images/b/bc/Upgrade_Slot.png"> Unused Upgrade Slot</div>' : '';
						
					var head = '\
					<span><img src="' + item['icon'] + '" class="'+ item['rarity'].toLowerCase() +'-icon"></span>\
					<span class="tootip-head-text '+ item['rarity'].toLowerCase() +'-text">' + item['name'] + '</span>\
					<span id="details_start_'+ id +'"></span>';
					
					$('#tooltip_' + id ).html( head );
					$(  weaponSrenth + attributes ).delay(1).insertAfter( '#details_start_'+ id );
								
					// Check if weapon has a sigil, if it does addit to the html
					if( item['details']['suffix_item_id'] != undefined ) {
						$(function() {
							$.getJSON( apiItemURL + '/' + item['details']['suffix_item_id'] , function( sigil ) {
								var html = '\
											<br>\
											<div><img src="'+ sigil['icon'] +'" width="20" heigh"20" class="sigilImage"> <span class="sigilName">'+ sigil['name'] +'</span> </div>\
											<div class="common-text">'+ sigil['details']['infix_upgrade']['buff']['description'] +'</div>\
											<br>';
							//apend the sigil html
							$(  html ).delay(1).insertAfter( '#details_start_'+ id );
							

							}) // end getJSON
						}) // end function 
					} // end if statement	
					// Lets get back to the regurlar html 
					
					var html = '\
							<br>\
							<div class="rarity">'+ item['rarity'] +'</div>\
							<div class="type">'+  item['details']['type'] + ' - ' + item['type'] +'</div>\
							'+ reqLevel +'\
							<br>\
							<span id="details_end_'+ id +'"></span>\
							';
						
						$('#tooltip_' + id ).delay(1).append( html );
						if( item['type'] == 'Weapon' )
							$(  desc ).delay(1).insertAfter( '#details_end_'+ id );
						else 
							$(  desc ).delay(1).insertAfter( '#details_start_'+ id );
						
					// Trading post function
					tpData( id );
				}); // end getJSON
			}); // end function	
			$( '#tooltip_' + id ).show( "fast" );
		}).on( 'mouseleave touchend', elementName, function() { $( '#tooltip_' + $(this).attr( 'id' ) ).hide(); }
	)} // end on mouse over

	/***************************************************
	* Function to get the gem exchange 
	***************************************************/
	function gemExchange ( gems, insertId ){
		$.getJSON( aipGemexchangeURl + gems , function( data ) {
			$(' <div class="dashedBot">At ' + formatGW2Money( data['coins_per_gem'] ) + 'per gem, ' + numberWithCommas( gems ) + ' <i class="fa fa-diamond" aria-hidden="true"></i> convert to:</div>' ).insertBefore( insertId ); ;
			$( insertId ).append( formatGW2Money( data['quantity'] ) );	
		})
	}
	
	// Totals
	itemTotal( apiComm + apiLegend,    '#legendary-total-buy', '#legendary-total-sell','#legendary-total-supply' ) // Legendary totals
	itemTotal( apiComm + apiContracts, '#contract-total-buy',  '#contract-total-sell' ) // Contracts Totals
	itemTotal( apiComm + apiPres,      '#precursor-total-buy', '#precursor-total-sell' ) // Precursor Totals
	itemTotal( apiComm + apiAuras,     '#auras-total-buy',     '#auras-total-sell' ) // Auras Totals
	itemTotal( apiComm + apiMinis,     '#minis-total-buy',     '#minis-total-sell' ) // Minis Totals
	itemTotal( apiComm + apiSkins,     '#skins-total-buy',     '#skins-total-sell' ) // Skins Totals

	// Prizes Grid	
	loadPrizeGrid( apiItemURL + apiLegend,    'col-sm-1', '#first-price-comtainer', 'first' );   // First prizes grid
	loadPrizeGrid( apiItemURL + apiContracts, 'col-sm-4', '#second-price-comtainer','second' ); // Second prizes grid
	loadPrizeGrid( apiItemURL + apiPres,      'col-sm-1', '#third-price-comtainer', 'third'  );  // Third prizes grid
	loadPrizeGrid( apiItemURL + apiAuras,     'col-sm-4', '#forth-price-comtainer', 'forth'  );  // Forth prizes grid
	loadPrizeGrid( apiItemURL + apiMinis,     'col-sm-4', '#fifth-price-comtainer', 'fifth'  );  // Fifth prizes grid
	loadPrizeGrid( apiItemURL + apiSkins,     'col-sm-4', '#sixth-price-comtainer', 'sixth'  );  // Sixth prizes grid
	
	// Mouse Enters
	mouseEnterBox( '.first' );
	mouseEnterBox( '.second' );
	mouseEnterBox( '.third' );
	mouseEnterBox( '.forth' );
	mouseEnterBox( '.fifth' );
	mouseEnterBox( '.sixth' );
	
	// gem exchange 
	gemExchange( 4000, '#gems4000' );
	gemExchange( 4000, '.gems4000' );
	gemExchange( 1200, '#gems1200' );
	gemExchange( 1200, '.gems1200' );
	gemExchange( 800,  '#gems800' );
	gemExchange( 800,  '.gems800' );
	gemExchange( 31600,'#gems31600' );
	
	// buy button expands buy section
	$('#contributors_link').click(function(e){
		$('#contributors').addClass('fullscreen').show();
	});
	
	// buy button expands buy section
	$('#closeButton').click(function(e){
		$('#contributors').removeClass('fullscreen').hide();
	});
	
	$(function() {
		//caches a jQuery object containing the header element
		var header = $("#BtnPassMe");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 300) {
				$('#buyButn').fadeIn("slow")
			} else {
				$('#buyButn').fadeOut("slow")
			}
		});
	});
	
	// submit form
	$(document).on('submit','#contact_form', function( e )
	{
		$( "#formMsg" ).html( '' );
		$.post( "contact_form.php", $(this).serialize() ).done( function( data ) 
		{
			$( "#formMsg" ).html( data );
		});
		event.preventDefault();
		return false;
	})
	
	/*****************************************************
	ATTACH TIMEGO TO TIME ELEMENTS
	*****************************************************/
	$("time.timeago").timeago();

	/*****************************************************
	ATTACH Youtube title
	*****************************************************/
	  var varID = '78RUGbKkMFI';
	  var varApiKey = 'AIzaSyDDBk8tAkod1VRRNyFZF09fgQyMpnSe5HI';

	 
	/* $( "div[id^='youtubeInfo_']" ).each( function( ){
		var id = $(this).attr( 'id' ); // The ID
		var id = id.replace( 'youtubeInfo_', '' );
		getVids( id, "#youtubeInfo_" + id );
	});

	function getVids(vid, div){
		$.get(
		"https://www.googleapis.com/youtube/v3/videos",{
	    part: 'snippet, statistics',
	    id: vid, 
	    key: varApiKey },
		function( data ){
			var title    = data.items[0].snippet.title;
		    var channel  = data.items[0].snippet.channelTitle;
		    var channelId  = data.items[0].snippet.channelId;
		    var likes    = data.items[0].statistics.likeCount;
		    var dislikes = data.items[0].statistics.dislikeCount;
		    var views = data.items[0].statistics.viewCount;
		    var rating   = likes - dislikes;
			ChangeText( title, channel, likes, dislikes, rating, views, channelId, div );
	      }
	  )
	}

	function ChangeText(title, channel, likes, dislikes, rating, views, channelId, div) {
		//$( div + " .title" ).append( title );
		$( div + " .channel" ).append( '<a href="http://youtube.com/channel/' + channelId + '" target="_blank">' + channel + '</a>' );
		$( div ).parent().parent().attr( 'data-id', rating );
		$( div + " .likes" ).append( numberWithCommas( likes ) );
		$( div + " .dislikes" ).append( numberWithCommas( dislikes ) );
		$( div + " .views" ).append( numberWithCommas( views ) + " views" );
	}



	$(".entriesWrapper").find('.findme').sort(function (a, b) {
	    return parseInt(a.getAttribute('data-id')) > parseInt(b.getAttribute('data-id'));
	}).each(function () {
	    var element = $(this);
	    $(element).appendTo(".entriesWrapper");
	}); */
});
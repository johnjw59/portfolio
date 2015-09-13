$(function(){
  var currencies = [
    { value: 'YVR-Airport', data: '4-tickettype_yvrairport.html' },
    { value: 'Sea Island Centre', data: '4-tickettype_seaislandcentre.html' },
    { value: 'Templeton', data: '4-tickettype_templeton.html' },
	{ value: 'Richmond-Brighouse', data: '4-tickettype_richmondbrighouse.html' },
	{ value: 'Lansdowne', data: '4-tickettype_lansdowne.html' },
	{ value: 'Aberdeen', data: '4-tickettype_aberdeen.html' },
	{ value: 'Bridgeport', data: '4-tickettype_bridgeport.html' },
	{ value: 'Marine Drive', data: '4-tickettype_marinedrive.html' },
	{ value: 'Langara-49th Avenue', data: '4-tickettype_langara49thavenue.html' },
	{ value: 'Oakridge-41st Avenue', data: '4-tickettype_oakridge41stavenue.html' },
	{ value: 'King Edward', data: '4-tickettype_kingedward.html' },
	{ value: 'Broadway City Hall', data: '4-tickettype_broadwaycityhall.html' },
	{ value: 'Olympic Village', data: '4-tickettype_olympicvillage.html' },
	{ value: 'Yaletown-Roundhouse', data: '4-tickettype_yaletownroundhouse.html' },
	{ value: 'Vancouver City Centre', data: '4-tickettype_vancouvercitycentre.html' },
	{ value: 'Burrard', data: '4-tickettype_burrard.html' },
	{ value: 'Waterfront', data: '4-tickettype_waterfront.html' },
	{ value: 'Granville', data: '4-tickettype_granville.html' },
	{ value: 'Stadium-Chinatown', data: '4-tickettype_stadiumchinatown.html' },
	{ value: 'Main Street-Science World', data: '4-tickettype_mainstreetscienceworld.html' },
	{ value: 'VCC-Clark', data: '4-tickettype_vccclark.html' },
	{ value: 'Commercial-Broadway', data: '4-tickettype_commercialbroadway.html' },
	{ value: 'Nanaimo', data: '4-tickettype_nanaimo.html' },
	{ value: '29th Avenue', data: '4-tickettype_29thavenue.html' },
	{ value: 'Joyce-Collingwood', data: '4-tickettype_joycecollingwood.html' },
	//{ value: 'Metrotown', data: '4-tickettype_metrotown.html' },
	{ value: 'Royal Oak', data: '4-tickettype_royaloak.html' },
	{ value: 'Edmonds', data: '4-tickettype_edmonds.html' },
	{ value: '22nd Street', data: '4-tickettype_22ndstreet.html' },
	{ value: 'New Westminster', data: '4-tickettype_newwestminster.html' },
	{ value: 'Columbia', data: '4-tickettype_columbia.html' },
	{ value: 'Scott Road', data: '4-tickettype_scottroad.html' },
	{ value: 'Gateway', data: '4-tickettype_gateway.html' },
	{ value: 'Surrey Central', data: '4-tickettype_surreycentral.html' },
	{ value: 'King George', data: '4-tickettype_kinggeorge.html' },
	{ value: 'Sapperton', data: '4-tickettype_sapperton.html' },
	{ value: 'Braid', data: '4-tickettype_braid.html' },
	{ value: 'Lougheed Town Centre', data: '4-tickettype_lougheedtowncentre.html' },
	{ value: 'Production Way/University', data: '4-tickettype_productionwayuniversity.html' },
	{ value: 'Lake City Way', data: '4-tickettype_lakecityway.html' },
	{ value: 'Sperling/Burnaby Lake', data: '4-tickettype_sperlingburnabylake.html' },
	{ value: 'Holdom', data: '4-tickettype_holdom.html' },
	{ value: 'Brentwood Town Centre', data: '4-tickettype_brentwoodtowncentre.html' },
	{ value: 'Gilmore', data: '4-tickettype_gilmore.html' },
	{ value: 'Rupert', data: '4-tickettype_rupert.html' },
	{ value: 'Renfrew', data: '4-tickettype_renfrew.html' },
	{ value: 'Patterson', data: '4-tickettype_patterson.html' },
	
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      window.location.href = suggestion.data
    }
  });
  

});
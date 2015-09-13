var gallery = new Array();
gallery[0] = new Array("smoked_chicken.png", "lamb_spinach.png");
gallery[1] = new Array("mexican_chicken.png", "broccoli_cheddar.png");
gallery[2] = new Array("split_pea.png");

function pickImageFrom(whichGallery)
{
	var idx = Math.floor(Math.random() * gallery[whichGallery].length);
	document.write('<img src="images/' + gallery[whichGallery][idx] + '" />');
}
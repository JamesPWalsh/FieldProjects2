function getUrlVars() 
	{
    var vars;
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars = value;
    });
	return vars;
	}
	
	function displaying() {
			  console.log("inside");
			  var x = document.getElementById(urlPar);
			  console.log(x)
			  if (x.style.display === "none") {
				x.style.display = "block";
				console.log("here");
			  }
			}
	var urlPar = getUrlVars();
	console.log(urlPar);
	displaying();
var user = document.getElementById('user').innerHTML;


function dis()
		{
			xmlhttp = new XMLHttpRequest();
			var url = "select.php?user="+user;
			xmlhttp.open("GET", url, false);
			xmlhttp.send(null);
			document.getElementById('get_data').innerHTML = xmlhttp.responseText;
		}
		dis ();
		setInterval(function(){
			dis();
		},500);
		

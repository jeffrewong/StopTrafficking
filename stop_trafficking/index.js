/* Harry, Muhammad, Jeffrey, David, Alexis */
function start()
{
	document.getElementById("drop_down").style.display = "none";
}
var value = 0;
function menu_change()
{
	if (value == 0)
	{
		document.getElementById("drop_down").style.display = "block";
		value = 1;
	}
	else
	{
		document.getElementById("drop_down").style.display = "none";
		value = 0;
	}
}
var counter = 2;
function slide()
{
	if (counter == 1)
	{
		$('#p1').delay('450').fadeIn('slow');
		$('#p3').fadeOut('1000');
	}
	if (counter == 2)
	{
		$('#p1').fadeOut('1000');	
		$('#p2').delay('450').fadeIn('slow');
	}
	if (counter == 3)
	{
		$('#p2').fadeOut('1000');
		$('#p3').delay('450').fadeIn('slow');
	}
	counter++;
	if (counter == 4)
		counter = 1;
}			
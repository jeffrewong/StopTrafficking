nonScramble = new Array("1", "2", "3", "4", "5", "6", "7", "8")
scrambled = new Array();
var scenariosPassed = 0;
var points = 0;
function scramble()
{
	for (i = 0; i < 8; i++)
	{
		rng = parseInt(Math.random() * nonScramble.length)+1;
		if (rng == 1)
		{
			scrambled[i] = nonScramble.splice(0,1);
		}
		else
			if (rng == 2)
			{
				scrambled[i] = nonScramble.splice(1,1);
			}
			else
				if (rng == 3)
				{
					scrambled[i] = nonScramble.splice(2,1);
				}
				else
					if (rng == 4)
					{
						scrambled[i] = nonScramble.splice(3,1);
					}
					else
						if (rng == 5)
						{
							scrambled[i] = nonScramble.splice(4,1);
						}
						else
							if (rng == 6)
							{
								scrambled[i] = nonScramble.splice(5,1);
							}
							else
								if (rng == 7)
								{
									scrambled[i] = nonScramble.splice(6,1);
								}
								else
									if (rng == 8)
									{
										scrambled[i] = nonScramble.splice(7,1);
									}
	}
}
function begin()
{
	document.getElementById('startid').style.display = 'none';
	if (scrambled[scenariosPassed] == 1)
	{
		 $("#scenario1id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 2)
	{
		$("#scenario2id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 3)
	{
		 $("#scenario3id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 4)
	{
		 $("#scenario4").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 5)
	{
		 $("#scenario5id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 6)
	{
		 $("#scenario6id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 7)
	{
		 $("#scenario7id").hide().fadeIn('slow');
	}
	if (scrambled[scenariosPassed] == 8)
	{
		 $("#scenario8id").hide().fadeIn('slow');
	}			}
function wrong()
{
	$("#ustoopidid").fadeIn('10000');
	$("#nextBtn").fadeIn('10000');
	if (scrambled[scenariosPassed] == 1)
	{
		 $("#scenario1id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 2)
	{
		 $("#scenario2id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 3)
	{
		 $("#scenario3id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 4)
	{
		 $("#scenario4id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 5)
	{
		 $("#scenario5id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 6)
	{
		 $("#scenario6id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 7)
	{
		 $("#scenario7id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 8)
	{
		 $("#scenario8id").fadeOut('slow');
	}
}
function right()
{
	$("#correctid").fadeIn('10000');
	$("#nextBtn").fadeIn('10000');
	if (scrambled[scenariosPassed] == 1)
	{
		 $("#scenario1id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 2)
	{
		 $("#scenario2id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 3)
	{
		 $("#scenario3id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 4)
	{
		 $("#scenario4").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 5)
	{
		 $("#scenario5id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 6)
	{
		 $("#scenario6id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 7)
	{
		 $("#scenario7id").fadeOut('slow');
	}
	if (scrambled[scenariosPassed] == 8)
	{
		 $("#scenario8id").fadeOut('slow');
	}
	points++;
}
function nextScenario()
{
	$("#correctid").fadeOut('10000');
	$("#ustoopidid").fadeOut('10000');
	$("#nextBtn").fadeOut('10000');
	scenariosPassed++;
	if (scrambled[scenariosPassed] == 1)
	{
		 $("#scenario1id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 2)
	{
		$("#scenario2id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 3)
	{
		 $("#scenario3id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 4)
	{
		 $("#scenario4id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 5)
	{
		 $("#scenario5id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 6)
	{
		 $("#scenario6id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 7)
	{
		 $("#scenario7id").delay('500').hide().fadeIn('slow');
	}
	else if (scrambled[scenariosPassed] == 8)
	{
		 $("#scenario8id").delay('500').hide().fadeIn('slow');
	}
	else
	{
		 $("#scenario1id").fadeOut('slow');
		 $("#scenario2id").fadeOut('slow');
		 $("#scenario3id").fadeOut('slow');
		 $("#scenario4id").fadeOut('slow');
		 $("#scenario5id").fadeOut('slow');
		 $("#scenario6id").fadeOut('slow');
		 $("#scenario7id").fadeOut('slow');
		 $("#scenario8id").fadeOut('slow');
		 $('nextBtn').fadeOut('slow');
		 $("#correctid").fadeOut('10000');
		$("#ustoopidid").fadeOut('10000');
		document.getElementById('score').innerHTML = "You have gotten " + points + " out of 8 scenarios correct.";
	}
}
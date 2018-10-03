function chooseEdit(number)
	{
		if (number ==1)
		{
			document.getElementById("welcomeMessageId").readOnly = false;
			document.getElementById("welcomeMessageId").style.fontFamily = "sans-serif";
		}

		else if (number ==2)
		{
			document.getElementById("workingMessageId").readOnly = false;
			document.getElementById("workingMessageId").style.fontFamily = "sans-serif";
		}

		else if (number ==3)
		{
			document.getElementById("thankyouMessageId").readOnly = false;
			document.getElementById("thankyouMessageId").style.fontFamily = "sans-serif";
		}

	}

	function choosePreview(number)
	{
		if (number ==1)
		{
			document.getElementById("welcomeMessageId").readOnly = true;
			document.getElementById("welcomeMessageId").style.fontFamily = "Comic Sans MS";
		}

		else if (number ==2)
		{
			document.getElementById("workingMessageId").readOnly = true;
			document.getElementById("workingMessageId").style.fontFamily = "Comic Sans MS";
		}

		else if (number ==3)
		{
			document.getElementById("thankyouMessageId").readOnly = true;
			document.getElementById("thankyouMessageId").style.fontFamily = "Comic Sans MS";
		}
		


	}
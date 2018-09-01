function addScenario()
{
	getForm= document.getElementById("container");

	createDiv = document.createElement("div");
	createDiv.setAttribute("class", "inputBodyBox");

	createTextarea = document.createElement("textarea");
	createTextarea.setAttribute("class", "textareaBox");
	createTextarea.setAttribute("name", "scenarioDescription["+ countId+ "]");
	createTextarea.setAttribute("id", "scenarioDescription["+ countId+ "]");

	createDiv.appendChild(createTextarea);

	createaddAnswerButtonDiv = document.createElement("div");
	createaddAnswerButtonDiv.setAttribute("class", "addAnswerButton");
	createTextarea.setAttribute("id", "addAnswerButtonId["+ countId+"]");
	createTextarea.setAttribute("name", "addAnswerButtonId["+ countId+"]");

	
	createDiv.appendChild(createaddAnswerButtonDiv);

	createaddAnswerButton = document.createElement("input");
	createaddAnswerButton.setAttribute("type", "button");
	createaddAnswerButton.setAttribute("id", "addAnswerbutton[1]");
	createaddAnswerButton.setAttribute("value", "Add Answer");
	createaddAnswerButton.setAttribute("class", "otherButton buttonOptionsHover");

	createaddAnswerButtonDiv.appendChild(createaddAnswerButton);
	

	getForm.appendChild(createDiv);

	countId++;

}

var countId= 1;

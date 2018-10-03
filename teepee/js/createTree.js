	// Get the modal
		var modal = document.getElementById('myModal');
		// Get the button that opens the modal
		var btn = document.getElementById('importTree');
		// Get the <span> element that closes the modal
    var btnJson = document.getElementById('jsonParseBtn');

 		var btnNewTree = document.getElementById('buildTree');

		var jsonDiv = document.getElementById('container');
		var tblAddLevel = document.getElementById('tblLevels');
		var createTableDivision = document.getElementById('createTableDiv');
		var closeBtn = document.getElementsByClassName('close')[0];

		//When the user clicks the button, open the modal

		var datas = {
    'tree': [
        {
            'name': 'name1',
            'tree': [
                {'name': 'name2'},
                {'name': 'name3'},
                {
                    'name': 'name4',
                    'tree': [
                        {'name': 'name5'},
                        {'name': 'name6'}
                    ]
                },
                {'name': 'name7'}
            ]
        },
        {
            'name': 'name8',
            'tree': [
                {'name': 'name9'}
            ]
        }
        ]
    }


	// Build the tree :



		btnJson.addEventListener('click',openJson);
		function openJson(){
			jsonDiv.style.display = 'block';
			modal.style.display = 'none';
			createTableDivision.style.display = 'none';
			buildTree(datas.tree, $('div#container')[0]);
		}


		function buildTree(tree, container)
		{


			console.log("in json parseeee");
			var newContainer;

	    _.each(tree, function(item) {
				  newContainer = document.createElement('ul');
	        var nameText = document.createTextNode(item.name);
					// var ulMain = document.createElement('ul');
					//newContainer.appendChild(ulMain);
					var liMain = document.createElement('li');
					newContainer.appendChild(liMain);
	        //newContainer.append(ulMain);
					liMain.appendChild(nameText);
	        container.append(newContainer);
	         if(item.tree){
						 buildTree(item.tree, newContainer);
					 }
	    });
	    }
		btn.addEventListener('click',openModal);
		//To create a new Tree
		btnNewTree.addEventListener('click',createNewTree);
		//listen for closes
		closeBtn.addEventListener('click',closeModal);
		//window click
		window.addEventListener('click',clickOutside);

		function openModal() {
			console.log("in blockkkk");
			jsonDiv.style.display = 'none';
			modal.style.display = 'block';
			createTableDivision.style.display = 'none';

		}

		function myFunction(){
    var x = document.getElementById("myFile");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
                }
            }
        }
    }
    else {
        if (x.value == "") {
            txt += "Select one or more files.";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
    }
    document.getElementById("demo").innerHTML = txt;
}
		// When the user clicks on <span> (x), close the modal
		function closeModal() {
			console.log("in closeblockkk");
			modal.style.display = 'none';
		}
		function clickOutside(e){
			if (e.target == modal) {
				modal.style.display = 'block';
			}
		}
		function createNewTree(){
				console.log("Hiii ,create new tree");
				jsonDiv.style.display = 'none';
				modal.style.display = 'none';
				createTableDivision.style.display = 'block';



			//	tblAddLevel.style.display = 'block';
		}

		function Add() {
				var txtName = document.getElementById("txtName");
				AddRow(txtName.value);
				txtName.value = "";
		};
		function Remove(button) {
				var row = button.parentNode.parentNode;
				var name = row.getElementsByTagName("TD")[0].innerHTML;
				if (confirm("Do you want to delete: " + name)) {
					var table = document.getElementById("tblCustomers");
						table.deleteRow(row.rowIndex);
				}
		};
		function AddRow(name, country) {
				var tBody = document.getElementById("tblLevels").getElementsByTagName("TBODY")[0];
				row = tBody.insertRow(-1);
				var cell = row.insertCell(-1);
				cell.innerHTML = name;
				cell = row.insertCell(-1);
				var btnRemove = document.createElement("INPUT");
			//	btnRemove.background-image = "url('minus.png')";
				//btnRemove.innerHTML = '<img src="minus.png" />';
				btnRemove.type = "button";
				//btnRemove.value = "Remove";
				btnRemove.setAttribute("backgroundImage", "minus.png");
				btnRemove.setAttribute("onclick", "Remove(this);");
				cell.appendChild(btnRemove);
		};


// function chooseEdit(number)
// 	{
// 		if (number ==1)
// 		{
// 			document.getElementById("welcomeMessageId").readOnly = false;
// 			document.getElementById("welcomeMessageId").style.fontFamily = "sans-serif";
// 		}
//
// 		else if (number ==2)
// 		{
// 			document.getElementById("workingMessageId").readOnly = false;
// 			document.getElementById("workingMessageId").style.fontFamily = "sans-serif";
// 		}
//
// 		else if (number ==3)
// 		{
// 			document.getElementById("thankyouMessageId").readOnly = false;
// 			document.getElementById("thankyouMessageId").style.fontFamily = "sans-serif";
// 		}
//
// 	}
//
// 	function choosePreview(number)
// 	{
// 		if (number ==1)
// 		{
// 			document.getElementById("welcomeMessageId").readOnly = true;
// 			document.getElementById("welcomeMessageId").style.fontFamily = "Comic Sans MS";
// 		}
//
// 		else if (number ==2)
// 		{
// 			document.getElementById("workingMessageId").readOnly = true;
// 			document.getElementById("workingMessageId").style.fontFamily = "Comic Sans MS";
// 		}
//
// 		else if (number ==3)
// 		{
// 			document.getElementById("thankyouMessageId").readOnly = true;
// 			document.getElementById("thankyouMessageId").style.fontFamily = "Comic Sans MS";
// 		}
//
//
//
// 	}

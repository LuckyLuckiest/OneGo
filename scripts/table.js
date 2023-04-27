// Check if the policy_name_input and policy_input have non-empty values
document.getElementById("create").onclick = function () {
	
	if (policy_name_input.value != "" && policy_input.value != "") { // Get the table and create a new row and two new cells
		let table = document.getElementById("policies");
		let tr = table.insertRow();
		let th = document.createElement('th');
		td = document.createElement('td');
		tr.appendChild(th);
		tr.appendChild(td);
		// Set the values of the new cells to the values entered by the user
		th.innerHTML = document.getElementById("policy_name_input").value;
		td.innerHTML = document.getElementById("policy_input").value;
	}else{
		alert("you can not insert an empty data");// Show an alert if the user did not enter both values
	}
	

}


const policy_name_input = document.getElementById("policy_name_input"); 

policy_name_input.addEventListener('input', function () {
	const value = this.value;
	const regex = /^[A-Za-z0-9\s]+$/; // this regex pattern matches only letters and numbers
	if (!regex.test(value)) {
		this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
	}
});



const policy_input = document.getElementById("policy_input"); 

policy_input.addEventListener('input', function () {
	const value = this.value;
	const regex = /^[A-Za-z0-9\s]+$/; // this regex pattern matches only letters and numbers
	if (!regex.test(value)) {
		this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
	}
});





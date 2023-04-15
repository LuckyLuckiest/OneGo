
document.getElementById("create").onclick = function () {
    let table = document.getElementById("policies");
    let tr = table.insertRow();
    let th = document.createElement('th');
    td = document.createElement('td');
    tr.appendChild(th);
    tr.appendChild(td);
    th.innerHTML = document.getElementById("policy_name_input").value;
    td.innerHTML = document.getElementById("policy_input").value;

}


const policy_name_input = document.getElementById("policy_name_input"); // replace 'myInput' with the ID of your input element

policy_name_input.addEventListener('input', function() {
  const value = this.value;
  const regex = /^[a-zA-Z0-9]*$/; // this regex pattern matches only letters and numbers
  if (!regex.test(value)) {
    this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
  }
});



const policy_input = document.getElementById("policy_input"); // replace 'myInput' with the ID of your input element

policy_input.addEventListener('input', function() {
  const value = this.value;
  const regex = /^[a-zA-Z0-9]*$/; // this regex pattern matches only letters and numbers
  if (!regex.test(value)) {
    this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
  }
});





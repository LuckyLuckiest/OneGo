//get the form element
let form = document.getElementById("form");
//add a listener
form.addEventListener("submit", (e) => {
    e.preventDefault();
    // Create a map of question names and their corresponding numbers
    let names = new Map(
        [
            ["services", 1],
            ["location", 2],
            ["stay-services", 3],
            ["car-rental-extras", 5],
            ["stay-services1", 6],
        ]
    )
    // Create an empty map to store the status of each question
    let status = new Map();
    // Get the keys (names) of the questions
    let name = names.keys();
    // Iterate through each question and check if it is answered
    for (const iterator of name) {
        status.set(iterator, check(iterator))
    }
// Check if all questions are answered, if not display an alert and scroll to the question
    for (const i of status.keys()) {
        if (!(status.get(i))) {
            document.getElementById(i).scrollIntoView({ behavior: 'smooth' });
            alert(`the question number ${names.get(i)} is not answred.`);
            document.getElementById(i).innerHTML = "this question is required";
            exit(0);
        }
    }
// Validate the answer to question number 4 (date)
    let value = document.getElementById("text");
    if (value.value == "" || value == null) {
        alert(`the questions number ${4} is not answred`);
        document.getElementById("data").scrollIntoView({ behavior: 'smooth' });
        document.getElementById("data").innerHTML = "this question is required";
        exit(0);
    } else {
        if (validateDate(value.value) == false) {
            alert("Please enter a valid date in the format of YYYY-MM-DD");
            exit(0);
        }

    }



// Check if question number 7 (textarea) is answered
    let textarea = document.getElementById("textarea");
    if (textarea.value.length == 0) {
        alert(`the questions number ${7} is not answred`);
        document.getElementById("textarea1").scrollIntoView({ behavior: 'smooth' });
        document.getElementById("textarea1").innerHTML = "this question is required";
        exit(0);
    }



    names.clear();
    status.clear();
    location.reload();
})


//this function checkes if is checked or not 
function check(name) {

    let element = document.getElementsByName(name);
    for (let index = 0; index < element.length; index++) {
        if (element[index].checked) {
            return true;
        }
    }
    return false;
}






const textarea = document.getElementById("textarea"); 

textarea.addEventListener('input', function () {
    const value = this.value;
    const regex = /^[A-Za-z0-9\s]+$/; // this regex pattern matches only letters and numbers
    if (!regex.test(value)) {
        this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
    }
});
// Function to validate date input in the format of YYYY-MM-DD
function validateDate(input) {
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!input.match(dateRegex)) {

        return false;
    }
    return true;
}

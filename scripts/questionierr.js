let form = document.getElementById("form");
form.addEventListener("submit", (e) => {
    e.preventDefault()
    let names = new Map(
        [
            ["services", 1],
            ["location", 2],
            ["stay-services", 3],
            ["car-rental-extras", 5],
            ["stay-services1", 6],
        ]
    )
    let status = new Map();
    let name = names.keys();

    for (const iterator of name) {
        status.set(iterator, check(iterator))
    }

    for (const i of status.keys()) {
        if (!(status.get(i))) {
            document.getElementById(i).scrollIntoView({ behavior: 'smooth' });
            alert(`the question number ${names.get(i)} is not answred.`);
            document.getElementById(i).innerHTML = "this question is required";
            exit(0);
        }
    }

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



function check(name) {

    let element = document.getElementsByName(name);
    for (let index = 0; index < element.length; index++) {
        if (element[index].checked) {
            return true;
        }
    }
    return false;
}






const textarea = document.getElementById("textarea"); // replace 'myInput' with the ID of your input element

textarea.addEventListener('input', function () {
    const value = this.value;
    const regex = /^[a-zA-Z0-9]*$/; // this regex pattern matches only letters and numbers
    if (!regex.test(value)) {
        this.value = value.slice(0, -1); // remove the last character if it doesn't match the pattern
    }
});

function validateDate(input) {
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!input.match(dateRegex)) {

        return false;
    }
    return true;
}
//check customer input his contact number

function checkContactNumber() {
    var contactNumberInput = document.querySelector("input[name='Contact Number']");
    var contactNumberValue = contactNumberInput.value.trim();

//if customer doesn't input his number he will get alert message

    if (contactNumberValue === "") {
        alert("You must fill in the contact number.");
        return false;
    }

    return true;
}
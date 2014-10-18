function focusFirstBox() {
    document.all.document.all.name.focus();
}

function isFilled(elm) {
    if (elm.value == "" ||
        elm.value == null)
        return false;
    else return true;
}

function isFalse(elm) {
    if (elm.value == "FALSE")
        return false;
    else return true;
}

function validateEmail(elementValue){
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(elementValue);
}


// Check for null and for empty

function validate(form) {

    // Name

    if (isFilled(form.Name) == false) {
        alert("Please enter your name");
        form.Name.focus();
        return false;
    }

    // Phone

    if (isFilled(form.Phone) == false) {
        alert("Please enter your telephone number");
        form.Phone.focus();
        return false;
    }

    // Email

    if((isFilled(form.Email) == false) || !validateEmail(form.Email.value)) {
        alert("Please enter your correct Email Address");
        form.Email.focus();
        return false;
    }

    // Date
    if (isFilled(form.Date) == false) {
        alert("Please enter the date of your event");
        form.Date.focus();
        return false;
    }

    // Type

    if (isFilled(form.Type) == false) {
        alert("Please enter the type of event you are holding");
        form.Type.focus();
        return false;
    }

    // Venue

    if (isFilled(form.Venue) == false) {
        alert("Please enter the venue or location of your event");
        form.Venue.focus();
        return false;
    }

    // Entertainment

    if (isFilled(form.Entertainment) == false) {
        alert("Please enter the type of entertainment you require for your event");
        form.Entertainment.focus();
        return false;
    }

    // Guests

    if (isFilled(form.Guests) == false) {
        alert("Please enter an estimate for the number of guests coming to your event");
        form.Guests.focus();
        return false;
    }

    // If ok...

    return true;
}
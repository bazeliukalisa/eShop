
document.getElementById("uzsiregistruoti").addEventListener("click", function (ivykis) {
    alert('Ačiū!Jūs sėkmingai užsiregistravote!');
    var formData = {};
    $(".form-control").each(function (formField) {
        formData[this.id] = this.value;
    });
    try {
        localStorage.setItem("Vartotojo duomenys: ", JSON.stringify(formData));
    } catch (err) {
        console.log("Duomenys negali būti rodomi." + err);
    }
    localStorage.clear();


    function validate() {
        var name = document.getElementById("inputName");
        var surname = document.getElementById("inputSurname");
        var email = document.getElementById("emailId");
        var password = document.getElementById("passId");
        var password2 = document.getElementById("passConfirmId");
        var female = document.getElementById("gridRadios1");
        var male = document.getElementById("gridRadios2");
        var birthDate = document.getElementById("myDate");
        var checked = document.getElementById("gridCheck1");
        var result1 = $("#result1");
        var result2 = $("#result2");
        var result3 = $("#result3");
        var result4 = $("#result4");
        var result5 = $("#result5");

        if (!name.value) {
            name.style.border = "2px solid red";
            result1.text("Privalomas laukas");
            result1.css("color", "red");
            return false;
        } else {
            name.style.border = "none";
            name.style.border = "2px solid green";
            result1.text("jes");
        }
        if (!surname.value) {
            surname.style.borderBottom = "2px solid red";
            result2.text("Privalomas laukas");
            result2.css("color", "red");
            return false;
        } else {
            surname.style.borderBottom = "none";
            result2.style = "none";
            result2.text("");
        }



        if (!email.value) {
            email.style.borderBottom = "2px solid red";
            result2.text("Ivestas neteisingas el.paštas");
            result2.css("color", "red");
            return false;
        } else {
            email.style.borderBottom = "none";
            result2.style = "none";
            result2.text("");
        }

        if (!phone.value) {
            phone.style.borderBottom = "2px solid red";
            result3.text("Privalomas laukas");
            result3.css("color", "red");
            return false;
        } else {
            phone.style.borderBottom = "none";
            result3.style = "none";
            result3.text("");
        }
        if (!message.value) {
            message.style.borderBottom = "2px solid red";
            result4.text("Privalomas laukas");
            result4.css("color", "red");
            return false;
        } else {
            message.style.borderBottom = "none";
            result4.style = "none";
            result4.text("");
        }
        if (!checked.value) {
            checked.style.border = "2px solid red";
            result5.text("Privalomas laukas");
            result5.css("color", "red");
            return false;
        } else {
            checked.style.border = "none";
            result5.style = "none";
            result5.text("");

        }


        return true;
    }



});



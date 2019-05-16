
// Saugome paskutinio vartotojo duomenis.
document.getElementById("kontaktaiSubmit").addEventListener("click", function (ivykis) {

    var formData = {};
    $(".form-control").each(function (formField) {
        formData[this.id] = this.value;
    });
    try {
        localStorage.setItem("Vartotojo atsiliepimas: ", JSON.stringify(formData));
    } catch (err) {
        console.log("Klaida. Duomenys negali būti rodomi." + err);
    }
    localStorage.clear;
});
// Tikriname įvestį, kuriame kintamuosius.
function response() {
    var name = document.getElementById("nameInput");
    var email = document.getElementById("emailInput");
    var phone = document.getElementById("phoneInput");
    var message = document.getElementById("textInput");
    //Aprasome kintamuosius, kurie bus rodomi klaidos atveju.
    var result1 = $("#result1");
    var result2 = $("#result2");
    var result3 = $("#result3");
    var result4 = $("#result4");
    //Tikriname įvestis:
    if (!name.value) {
        name.style.border = "2px solid #B22222";
        result1.text("Privalomas laukas");
        result1.css("color", "#B22222");
        return false;
    } else {
        name.style.border = "none";
        result1.style = "none";
        result1.text("");
    }
    if (!email.value) {
        email.style.border = "2px solid #B22222";
        result2.text("Privalomas laukas");
        result2.css("color", "#B22222");
        return false;
    } else {
        email.style.border = "none";
        result2.style = "none";
        result2.text("");
    }
    if (!phone.value) {
        phone.style.border = "2px solid #B22222";
        result3.text("Privalomas laukas");
        result3.css("color", "#B22222");
        return false;
    } else {
        phone.style.border = "none";
        result3.style = "none";
        result3.text("");
    }
    if (!message.value) {
        message.style.border = "2px solid #B22222";
        result4.text("Privalomas laukas");
        result4.css("color", "#B22222");
        return false;
    } else {
        message.style.border = "none";
        result4.style = "none";
        result4.text("");
    }
    return alert("Jūsų atsiliepimas išsiųstas! Greitu metu su jumis susisieksime!");
}


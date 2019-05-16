// PROCEDUROS.HTML ALERTAI, KAD PROCEDURA UZSAKYTA!!!
document.getElementById("uzsisakytiProcedura1").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Veido procedūra" užsakyta!');
});
document.getElementById("uzsisakytiProcedura2").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Kojų depiliacija + kojų masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura3").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Veido kaukė su baltuoju moliu" užsakyta!');
});
document.getElementById("uzsisakytiProcedura4").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Aromaterapija + viso kūno masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura5").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Nugaros masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura6").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Aromaterapija + masažas žvakių šviesoje" užsakyta!');
});
document.getElementById("uzsisakytiProcedura7").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Kojų masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura8").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Masažas su kokoso aliejumi" užsakyta!');
});
document.getElementById("uzsisakytiProcedura9").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Aromaterapija + masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura10").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Viso kūno masažas" užsakyta!');
});
document.getElementById("uzsisakytiProcedura11").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Levandų aromaterapija" užsakyta!');
});
document.getElementById("uzsisakytiProcedura12").addEventListener("click", function (ivykis) {
    alert('Ačiū! Jūsų procedūra "Anticeliulitinis masažas su kvapniu kavos aliejumi" užsakyta!');
});

// Slepia visas proceduras, isskyrus veido
$('#veido').click(function (e) {
    e.preventDefault();
    $(".procedura1").show(1000);
    $(".procedura3").show(1000);
    $(".procedura2").hide(1000);
    $(".procedura4").hide(1000);
    $(".procedura5").hide(1000);
    $(".procedura6").hide(1000);
    $(".procedura7").hide(1000);
    $(".procedura8").hide(1000);
    $(".procedura9").hide(1000);
    $(".procedura10").hide(1000);
    $(".procedura11").hide(1000);
    $(".procedura12").hide(1000);
});
// Slepia visas proceduras, isskyrus masazus
$('#masazai').click(function (e) {
    e.preventDefault();
    $(".procedura5").show(1000);
    $(".procedura7").show(1000);
    $(".procedura8").show(1000);
    $(".procedura10").show(1000);
    $(".procedura12").show(1000);
    $(".procedura1").hide(1000);
    $(".procedura2").hide(1000);
    $(".procedura3").hide(1000);
    $(".procedura4").hide(1000);
    $(".procedura6").hide(1000);
    $(".procedura9").hide(1000);
    $(".procedura11").hide(1000);
});
// Slepia visas proceduras, isskyrus aromaterapija
$('#aroma').click(function (e) {
    e.preventDefault();
    $(".procedura11").show(1000);
    $(".procedura1").hide(1000);
    $(".procedura2").hide(1000);
    $(".procedura3").hide(1000);
    $(".procedura4").hide(1000);
    $(".procedura5").hide(1000);
    $(".procedura6").hide(1000);
    $(".procedura7").hide(1000);
    $(".procedura8").hide(1000);
    $(".procedura9").hide(1000);
    $(".procedura10").hide(1000);
    $(".procedura12").hide(1000);
//    if ($(".row") == ) {
//        $(".row").remove();
//    }
});

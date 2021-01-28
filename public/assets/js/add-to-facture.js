$(document).ready(function() {
    $(".add-stock-to-facture").click(function (){
        $("#hiddenStockIdForFacture")[0].value = $(this)[0].id;
        $("#createFacture")[0].submit();
    });

    $(".add-client-to-facture").click(function (){
        $("#hiddenClientIdForFacture")[0].value = $(this)[0].id;
        $("#createFacture")[0].submit();
    });
});
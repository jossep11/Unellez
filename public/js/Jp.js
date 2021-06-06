var item = document.querySelectorAll("#nro_item");
var id = document.querySelector("#IdentificadorIndex").textContent;

/** with the element "item" I call the index element, so then here below
 * I can add the index and with the id and the function charAt(0)I can get the first
 * letter of the text that it's being working --jossep11 (jp)
 */
item.forEach(function (valor, indice, item1) {
    valor.innerHTML = `${id.charAt(0)}${indice + 1}`;
});

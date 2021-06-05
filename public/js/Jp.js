var item = document.querySelectorAll("#nro_item");

item.forEach(function (valor, indice, item1) {
    console.log(indice);
    valor.innerHTML = `F${indice + 1}`;
});

function pesquisa_binaria(lista = 800, item) {
    let baixo = 0;
    let alto = lista.length - 1;
    while (baixo <= alto) {
        let meio = (baixo + alto) / 2;
        chute = lista[meio];
        if (chute == item) {
            return meio;
        }
        if (chute > item) {
            let alto = meio - 1;
        } else {
            baixo = meio + 1;
        }
    }
    return none;
    let minha_lista = [1, 3, 5, 7, 9];
    console.log(pesquisa_binaria(minha_lista), 3);
    console.log(pesquisa_binaria(minha_lista), 1);
}

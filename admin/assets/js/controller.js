/*DASHBOARD ADMIN */

let btExcluir = document.querySelector('.excluir-anuncio');

btExcluir.addEventListener("click",function(e){
        e.preventDefault();
        let anunciosId = document.querySelector('.anuncios-tr');
        let IDExcluir = anunciosId.dataset.key;
        AlertConfirmRg("Excluir Anuncio","Desejar Excluir","Excluirdo Com sucesso!",IDExcluir,e)
});



function ExcluirAnuncios(id){
        element = document.querySelector('#excluir-anuncio');
    if ( confirm("Deseja Exluir o Anuncio de id "+id+"?") ){  
        element.parentNode.parentNode.parentNode.parentNode.remove()
        fetch('?page=anuncios-admin&id='+id, {
            method: 'GET',
            mode: 'cors', // pode ser cors ou basic(default)
            redirect: 'follow',
            headers: new Headers({
              'Content-Type': 'text/plain'
            })
        })
    }
}

function ExcluirCategoria(id){
   document.querySelector('.categorias-tr'+id).remove();
if ( confirm("Deseja Exluir a Categoria de id "+id+"?") ){  
 
  fetch('?page=categoria-admin&idCat='+id, {
      method: 'GET',
      mode: 'cors', // pode ser cors ou basic(default)
      redirect: 'follow',
      headers: new Headers({
        'Content-Type': 'text/plain'
      })
  })
}
}


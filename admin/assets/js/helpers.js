const  AlertConfirmRg = (tituloHeader,ConteudoMsg,SuccessMSG,id,e) =>{
    $.confirm({
        title: tituloHeader,
        content: ConteudoMsg,
        buttons: {
            confirm: function () {
                Excluir(id);  
                $.alert(SuccessMSG);
                e.target.parentNode.parentNode.parentNode.parentNode.remove()
                
             
            },
            cancel: function () {
        
                
          
            },
        }
    });
    }

function Excluir(id){  
fetch('?page=anuncios-admin&id='+id, {
    method: 'POST',
    mode: 'cors', // pode ser cors ou basic(default)
    redirect: 'follow',
    headers: new Headers({
      'Content-Type': 'text/plain'
    })
  })
 
}
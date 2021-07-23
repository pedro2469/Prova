(function (win,doc){
    'use strict';

    function confirmDel(event){

        event.preventDefault();
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Excluir Pessoa da tabela?")){
            let ajax=new XMLHttpRequest();
            //console.log(event.target.parentNode.href);
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.setRequestHeader('Access-Control-Allow-Origin','*');
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="pessoas";
                }
            }
            ajax.send();
        }else{
            return false;
        }
    }

    if(doc.querySelector('.excluirPessoa')){

        let btn=doc.querySelectorAll('.excluirPessoa');
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click', confirmDel,false);
        }

    }

})(window,document);

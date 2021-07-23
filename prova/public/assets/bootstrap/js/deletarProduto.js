(function (win,doc){

    'use strict';

    function confirmDel(event){
        event.preventDefault();

        let token= doc.getElementsByName("_toekn")[0].value;

        if(confirm("Deseja deletar?")){

            let ajax = new XMLHttpRequest();
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.setRequestHeader('Access-Control-Allow-Origin','*');
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="produtos";
                }
            };
            ajax.send();

        }else
        {
            return false;
        }
    }

    if(doc.querySelector('.delProduto-js')){

        let btn = doc.querySelectorAll('.delProduto-js');
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click', confirmDel, false);
        }

    }

})(window,document);

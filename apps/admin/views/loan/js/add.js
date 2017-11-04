


$(function(){
    var dobj=document.getElementsByClassName('dtype');
    for(var i=0;i<dobj.length;i++ ){
        if(dobj[i].getAttribute('value')==_dtype){
            dobj[i].setAttribute('checked','checked');
        }
    }
})
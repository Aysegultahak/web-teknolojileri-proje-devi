function control(formId){
    let invalids=document.getElementById(formId).querySelectorAll(':invalid').length,
    button=document.getElementById(formId).querySelectorAll('button[type="submit"]');
    console.log(invalids);

    if(invalids===0){
        button.removeAttribute('disabled');
    }else{
        button.setAttribute('disabled','disabled');
    }
}
control('form1');
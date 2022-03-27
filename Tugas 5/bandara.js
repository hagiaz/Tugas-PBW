function disablesend()
{
    document.getElementById("register").disabled = true;
}

function check()
{
    var check = document.getElementById("terms");

    if(check.checked){
        document.getElementById("regis").disabled = false;
    }
    else{
        document.getElementById("regis").disabled = true;
    }
}
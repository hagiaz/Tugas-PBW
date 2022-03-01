function fibonacci(){

    const number =  document.getElementById("deret").value;
    let n1 = 0, n2 = 1, nextTerm;

    document.write("<button onclick='kembali()'>Kembali</button>") 
    document.write("<br><br>");
    document.write(number + ' Suku pertama deret Fibonacci:');
    document.write("<br><br>");

    for (let i = 1; i <= number; i++) {
        document.write(i + ". <b>" + n1 + "</b><br>");
        nextTerm = n1 + n2;
        n1 = n2;
        n2 = nextTerm;
    }


}

function kembali(){
    window.location.href = 'Fibonacci.html';
}
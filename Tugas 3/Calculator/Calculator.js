const tambah = () => {
    let a = document.getElementById("Bil1").value;
    let b = document.getElementById("Bil2").value;
    const number1 = Number(a);
    const number2 = Number(b);
    let result = number1 + number2;
    document.getElementById("Hasil").value = result;
}

const kurang = () => {
    const number1 = document.getElementById("Bil1").value;
    const number2 = document.getElementById("Bil2").value;
    let result = number1 - number2;
    document.getElementById("Hasil").value = result;
}

const kali = () => {
    const number1 = document.getElementById("Bil1").value;
    const number2 = document.getElementById("Bil2").value;
    let result = number1 * number2;
    document.getElementById("Hasil").value = result;
}

const bagi = () => {
    const number1 = document.getElementById("Bil1").value;
    const number2 = document.getElementById("Bil2").value;
    let result = number1 / number2;
    document.getElementById("Hasil").value = result;
}

const sisa = () => {
    const number1 = document.getElementById("Bil1").value;
    const number2 = document.getElementById("Bil2").value;
    let result = number1 % number2;
    document.getElementById("Hasil").value = result;
}

function hapus() {
    document.getElementById("Bil1").value = "";
    document.getElementById("Bil2").value = "";
    document.getElementById("Hasil").value = "";
}
function calculate() {
  const angka1 = document.getElementById("angka1").value;
  const operator = document.getElementById("operator").value;
  const angka2 = document.getElementById("angka2").value;

  if (angka1.trim() === "" || angka2.trim() === "") {
    alert("Isian tidak boleh kosong!");
    return;
  }

  // AJAX Request to PHP
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "calculate.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (xhr.status === 200) {
      document.getElementById("hasil").value = xhr.responseText;
    }
  };
  xhr.send(`angka1=${angka1}&operator=${operator}&angka2=${angka2}`);
}

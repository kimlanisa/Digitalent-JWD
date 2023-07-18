function calculate(event) {
  event.preventDefault();

  const angka1 = document.getElementById("angka1").value;
  const operator = document.getElementById("operator").value;
  const angka2 = document.getElementById("angka2").value;

  if (angka1.trim() === "" || angka2.trim() === "") {
    alert("Isian tidak boleh kosong!");
    return;
  }

  const hasil = calculateResult(parseInt(angka1), operator, parseInt(angka2));

  document.getElementById("hasil").value = hasil;
}

function calculateResult(angka1, operator, angka2) {
  switch (operator) {
    case "+":
      return angka1 + angka2;
    case "-":
      return angka1 - angka2;
    case "*":
      return angka1 * angka2;
    case "/":
      return angka1 / angka2;
    default:
      return "Operator tidak valid";
  }
}

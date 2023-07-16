const hasilInput = [];

function handleSubmit(event) {
  event.preventDefault();

  const inputElement = document.getElementById("inputAngka");
  const angka = inputElement.value;

  cetakHasil(angka);

  inputElement.value = "";
}

function cetakHasil(angka) {
  hasilInput.push(angka);
  const outputElement = document.getElementById("output");

  while (outputElement.firstChild) {
    outputElement.removeChild(outputElement.firstChild);
  }

  hasilInput.forEach((input) => {
    const paragraph = document.createElement("p");
    paragraph.textContent = `Input ke ${input}`;
    outputElement.appendChild(paragraph);
  });
}

const toggleBtn = document.getElementById('accessibility-toggle');
const panel = document.getElementById('accessibility-panel');

toggleBtn.addEventListener('click', () => {
    panel.classList.toggle('hidden');
});

/* Mode Kontras */
function toggleContrast() {
    document.body.classList.toggle('high-contrast');
}

/* Mode Grayscale */
function toggleGrayscale() {
    document.body.classList.toggle('grayscale');
}

/* Font */
let fontSize = 100;

function fontIncrease() {
    fontSize += 10;
    document.documentElement.style.fontSize = fontSize + '%';
}

function fontReset() {
    fontSize = 100;
    document.documentElement.style.fontSize = '100%';
}

function getRandomLength() {
    return Math.floor(Math.random() * 991) + 10; 
}

function createRandomLine() {
    const line = document.getElementById('line');
    const lineWidth = getRandomLength();
    line.style.width = lineWidth + 'px';
}

createRandomLine();

document.addEventListener('click', createRandomLine);

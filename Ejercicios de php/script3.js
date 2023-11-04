function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function createRandomCircles() {
    const row = document.getElementById('circleRow');
    const numCircles = getRandomNumber(1, 10);

    for (let i = 0; i < numCircles; i++) {
        const cell = document.createElement('td');
        const circle = document.createElement('div');
        circle.className = 'circle';
        cell.appendChild(circle);
        row.appendChild(cell);
    }
}

createRandomCircles();

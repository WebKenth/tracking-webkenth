document.addEventListener('click', mouseClick);
document.addEventListener('mousemove', mouseMove);

movements = [];
clicks = [];


function mouseMove()
{
    movements.push(event);
    console.log(event);
}

function mouseClick()
{
    clicks.push(event);
    console.log(event);
}
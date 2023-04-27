let boxesNumber = 3;
let letters = ["A", "B", "C", "D", "E", "F", "A", "B", "C", "D", "E", "F"];
let boxSize = 80;
let boxesCount =[];


function chooseLetter(){
    let index = Math.floor(Math.random()*letters.length);
    let letter = letters[index];
    letters.splice(index, 1);
    return letter;
}

function createBox(size){
    let boxObj = document.createElement('div');
    let randomLetter = chooseLetter();
    boxObj.style.width = boxSize + 'px';
    boxObj.style.height = boxSize + 'px';
    boxObj.style.backgroundColor = '#000000';
    boxObj.style.marginTop = 58 + 'px';
    boxObj.style.marginRight = 68 + 'px';
    boxObj.innerText = randomLetter;
    boxObj.isValid = true;
    boxObj.style.color = '#ffffff';
    boxObj.style.fontFamily = 'Amiko';
    boxObj.style.fontSize = ((size*35)/100) + 'px';
    boxObj.style.fontWeight = 400 + 'px';
    boxObj.style.display = 'flex';
    boxObj.style.justifyContent = 'center';
    boxObj.style.alignItems = 'center';

    boxObj.onclick = function () {
        if(boxObj.isValid == true){
        flip(boxObj);
        }
    };

    return boxObj;
}

function flip(boxObj){

    if(boxesCount.length == 1){
        boxesCount[1] = boxObj;
        boxesCount[1].style.backgroundColor = '#CD5C5C';
        boxesCount[1].style.color = '#ffffff';
    }
    if(boxesCount.length == 0){
        boxesCount[0] = boxObj;
        boxesCount[0].style.backgroundColor = '#CD5C5C';
        boxesCount[0].style.color = '#ffffff';
    }

    setTimeout(function findMatch(){
        if(boxesCount.length == 2){
            if(boxesCount[0].innerText == boxesCount[1].innerText){     // its a match
                boxesCount[0].style.backgroundColor = '#E5E5E5';
                boxesCount[1].style.backgroundColor = '#E5E5E5';
                boxesCount[0].isValid = false;
                boxesCount[1].isValid = false;
                boxesCount = [];
            }
            else{
                boxesCount[0].style.backgroundColor = '#000000';
                boxesCount[0].style.color = '#000000';
                boxesCount[1].style.backgroundColor = '#000000';
                boxesCount[1].style.color = '#000000';
                boxesCount = [];
            }
        }
    },1000);
    
}

function addBoxs(){
    let game = document.getElementById("game");
    if (boxesNumber <= 12){
        for (i = 0; i < 3; i++){
            newBox = createBox(boxSize);
            game.appendChild(newBox);
            boxSize+=20;
        }
    }
    boxesNumber+=3;
}

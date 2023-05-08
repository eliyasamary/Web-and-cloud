
let num =0;

function returnToPreviousPage() {
    window.history.back();
}

const btn = document.querySelector('#submit-button');
btn.addEventListener('click', (event) => {
    let checkboxes = document.querySelectorAll('input[name="interests[]"]:checked');
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });

    num = values.length;
});  


function validateMyForm()
{
  if(num < 3)
  { 
    alert("At least three checkbox must be selected");
    returnToPreviousPage();    
    return false;
  }
  return true;
}
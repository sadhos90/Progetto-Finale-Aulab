console.log("ciao");
let firstNumber = document.querySelector('#firstNumber');

let secondNumber = document.querySelector('#secondNumber');
let thirdNumber = document.querySelector('#thirdNumber');

function createinterval(number, element , timing){
let counter = 0;
let interval = setInterval(() => {
    
    if (counter < number){
        counter++;
        element.innerHTML = counter;      
    }else{   
        clearInterval(interval);
    }

}, timing)};





// fine sezione counter
// inizio observer

let confirm = true;

let observer = new IntersectionObserver( (entries)=>{
    
    entries.forEach( (entry)=> {

        if(entry.isIntersecting && confirm){
            createinterval(529, firstNumber, 50);
            createinterval(369, secondNumber, 50);
            createinterval(107, thirdNumber, 50);
          confirm = false;
       }

   });

} );

observer.observe(thirdNumber);
console.log(confirm)
// fine observer






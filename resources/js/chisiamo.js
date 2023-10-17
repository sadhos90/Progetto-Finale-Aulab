let cardWrapper = document.querySelector('#cardWrapper');
// let div = document.querySelector('#div');
let h1 = document.querySelector('#h1');
let h3 = document.querySelector('#h3');
let h4 = document.querySelector('#h4');
let p = document.querySelector('#p');
let image = document.querySelector('#image');

function createUserCards(array) {
if (cardWrapper) {
        array.forEach(user => {
            let div = document.createElement('div');
            
            div.classList.add('col-12', 'col-md-6','my-5')
            console.log("div");
            div.innerHTML = `
            <div class="container d-flex justify-content-center">
                    <div class="userCard p-3 py-4">
                        <div class="text-center"> 
                            <img src="https://i.imgur.com/stD0Q19.jpg" width="100" class="rounded-circle">
                                <h3 class="mt-2">${user.name}</h3>
                                <span class="mt-1 clearfix">${user.role}</span>
                                
                                <div class="row mt-3 mb-3">
                                
                                <div class="col-md-4">
                                    <h5>HTML & CSS</h5>
                                    
                                </div>
                                <div class="col-md-4">
                                    <h5>Php Laravel</h5>
                                    
                                </div>
                                <div class="col-md-4">
                                    <h5>JS</h5>
                                    
                                </div>
                                
                                </div>
                                
                                <hr class="line">
                                
                                <small class="mt-4">${user.description}>
                                <div class="social-buttons mt-5"> 
                                <button class="neo-button"><i class="instagramPurple fa fa-instagram fa-1x"></i> </button> 
                                <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> 
                        </div>
                        
                        <div class="profile mt-5">
                        
                        <button class="profile_button px-5">View profile</button>
    
                        </div>
                    </div>
                </div>
            </div>
             `
    
            
        });
        cardWrapper.appendChild(div)
    }

}
    


// Esempio dati utente
const users = [
    { name: 'Luca Sessa', role: 'Developer Full Stack', email: 'mario@example.com', description: 'Lorem ipsum dolor sit amet.', image: 'path_to_image' },
    { name: 'Davide Di Palma', role: 'Developer Back End', email: 'luca@example.com', description: 'Lorem ipsum dolor sit amet.', image: 'path_to_image' },
    { name: 'Saddam', role: 'Developer Full Stack', email: 'saddam@example.com', description: 'Lorem ipsum dolor sit amet.', image: 'path_to_image' },
    { name: 'Shiam', role: 'Developer Front End', email: 'shiam@example.com', description: 'Lorem ipsum dolor sit amet.', image: 'path_to_image' },
    { name: 'Nicolò', role: 'Developer Front End', email: 'niccolò@example.com', description: 'Lorem ipsum dolor sit amet.', image: 'path_to_image' },

];

// Chiama la funzione per creare le usercard
createUserCards(users);

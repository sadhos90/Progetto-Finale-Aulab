<x-layout>
    <header>
        <div class="page-header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div
                        class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 vh-100 d-flex justify-content-center align-items-center p-0">
                        <h2 class="ps-5 mt-5 text-inst ">
                            <span id="testo"></span>
                            <script type="text/javascript">
                                // testo da mostrare    
                                var testo = "Restare aggiornati non è mai stato così semplice!";
                                // output
                                var output = "";
                                // incrementatore
                                var i = 0;
                                // velocità di scrittura
                                var speed = 100;
                                // dichiaro la funzione
                                function scrivi() {
                                    // creo l'output
                                    output += testo.charAt(i);
                                    // incremento
                                    i++;
                                    // scrittura
                                    document.getElementById("testo").innerHTML = output;
                                    // se è finito il testo
                                    if (i >= testo.length) {
                                        // fine
                                        clearInterval(s);
                                    }
                                }
                                // richiamo la funzione a intervalli
                                s = setInterval("scrivi()", speed);
                            </script>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>

        Seconda Card Con Titolo
        <div class="card-section">
            <div class="container-fluid bg-custom-sap">
                <div class="card-block  card-borderY mb30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- section-title -->
                            <div class="section-title mb-0">
                                <h2 class=" w-2 header-writers text-inst">Il sapere di essere informati . Illuminiamo
                                    menti con sapienti ragioni, scopri il sapere, è la nostra missione!</h2>
                                <p class="header-writers mt-4 text-inst">Articoli da tutto il mondo, portiamo il sapere
                                    anche dove non è concesso, la nostra forza siete voi </p>
                                <h3 class="w-3 header-writers display-6 text-inst">Grazie</h3>
                            </div>
                            <!-- /.section-title -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=" container mt-5 bg-custom-sap borderY">
        <div class="row justify-content-center p-5 ">
            <div class="col-12">
                <fieldset>
                    <h2 class="display-6 text-inst text-center">ARTICOLI RECENTI</h2>
                </fieldset>
            </div>
        </div>
    </div>









    </div>

    <div class="container mt-5">
        <div class="row mt-5 ms-5 justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-lg-4 ">
                    <x-card :article='$article'></x-card>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mt-5">
                <fieldset>
                    <h4 class="borderY text-center p-3">Controlla comodamente il meteo della tua città!</h4>
                </fieldset>
            </div>
        </div>
    </div>

    <section class="body-tempo mt-3">


        <div class="container-tempo">
            <div class="search-box">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" placeholder="Inserisci località">
                <button class="fa-solid fa-magnifying-glass"></button>
            </div>

            <div class="not-found">
                <img src="image/">
                <p>Oops! Posizione non valida :/</p>
            </div>

            <div class="weather-box">
                <img src="">
                <p class="temperature"></p>
                <p class="description"></p>
            </div>

            <div class="weather-details">
                <div class="humidity">
                    <i class="fa-solid fa-water"></i>
                    <div class="text">
                        <span></span>
                        <p>Umidità</p>
                    </div>
                </div>
                <div class="wind">
                    <i class="fa-solid fa-wind"></i>
                    <div class="text">
                        <span></span>
                        <p>Velocità del vento</p>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            const container = document.querySelector('.container-tempo');
            const search = document.querySelector('.search-box button');
            const weatherBox = document.querySelector('.weather-box');
            const weatherDetails = document.querySelector('.weather-details');
            const error404 = document.querySelector('.not-found');

            search.addEventListener('click', () => {

                const APIKey = 'f680e1f06d163ad2b3754fba4b592fb9';
                const city = document.querySelector('.search-box input').value;

                if (city === '')
                    return;

                fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${APIKey}`)
                    .then(response => response.json())
                    .then(json => {

                        if (json.cod === '404') {
                            container.style.height = '400px';
                            weatherBox.style.display = 'none';
                            weatherDetails.style.display = 'none';
                            error404.style.display = 'block';
                            error404.classList.add('fadeIn');
                            return;
                        }

                        error404.style.display = 'none';
                        error404.classList.remove('fadeIn');

                        const image = document.querySelector('.weather-box img');
                        const temperature = document.querySelector('.weather-box .temperature');
                        const description = document.querySelector('.weather-box .description');
                        const humidity = document.querySelector('.weather-details .humidity span');
                        const wind = document.querySelector('.weather-details .wind span');

                        switch (json.weather[0].main) {
                            case 'Clear':
                                image.src = '/image/clear.png';
                                break;

                            case 'Rain':
                                image.src = '/image/rain.png';
                                break;

                            case 'Snow':
                                image.src = '/image/snow.png';
                                break;

                            case 'Clouds':
                                image.src = '/image/cloud.png';
                                break;

                            case 'Haze':
                                image.src = '/image/mist.png';
                                break;

                            default:
                                image.src = '';
                        }

                        temperature.innerHTML = `${parseInt(json.main.temp)}<span>°C</span>`;
                        description.innerHTML = `${json.weather[0].description}`;
                        humidity.innerHTML = `${json.main.humidity}%`;
                        wind.innerHTML = `${parseInt(json.wind.speed)}Km/h`;

                        weatherBox.style.display = '';
                        weatherDetails.style.display = '';
                        weatherBox.classList.add('fadeIn');
                        weatherDetails.classList.add('fadeIn');
                        container.style.height = '590px';


                    });


            });
        </script>

    </section>

    <section class="container my-5 ">
        <div class="row">
          <div class="col-12 col-md-6">
             <img src="./image/img-counter.png" class="img-fluid rounded-circle p-3 border-p d-block mx-auto" alt="#">  
            </div>         
          <div class="col-12 col-md-6 text-p ">
                 <h3 class="text-center special-font">About Us</h3>
    
                 <p class="lead"><span id="firstNumber" class="number text-inst fa-2x">0</span class="">Utenti registrati</p>
                 <p class="lead"><span id="secondNumber" class="number text-inst fa-2x">0</span class="">Articoli creati</p>
                 <p class="lead"><span id="thirdNumber" class="number text-inst fa-2x">0</span class="">Utenti online</p>
          </div>    
        </div> 
      </section>

</x-layout>

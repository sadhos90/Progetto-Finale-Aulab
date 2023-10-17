<x-layout>
    <section class="lavora-con-noi-sfondo">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 vh-100 d-flex justify-content-center align-items-center  mb-3">
                    <h1 class="display-1 text-white"  >
                        <span id="testo"></span>
                    <script type="text/javascript">
                      // testo da mostrare    
                      var testo = "LAVORA CON NOI";
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
                          if(i >= testo.length) {
                              // fine
                              clearInterval(s);
                          }
                      }
                      // richiamo la funzione a intervalli
                      s = setInterval("scrivi()",speed);
                  </script>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">LAVORA CON NOI</h1>
              </fieldset>
            </div>
        </div>
    </div> --}}
    
    {{-- <div class="container mt-1 my-1">
        <div class="row justify-content-start">
            <div class=" my-3 col-12 col-md-6 my-5">
                <h2>Become Admin</h2>
                <p class="ms-1">Il compito di un admin che gestisce un articolo è monitorare e moderare il contenuto, assicurandosi che sia conforme alle linee guida, rispondere ai commenti o interazioni degli utenti, e garantire la qualità e l'accuratezza del materiale pubblicato.</p>
            </div>
        </div>
    </div>
    <div class="container my-1 mt-1">
        <div class="row justify-content-end">
            <div class=" my-3 col-12 col-md-6 my-5 text-end ">
                <h2>Like a Revisor</h2>
                <p class="ms-1">Il compito di un revisore che gestisce un articolo è quello di analizzare attentamente il contenuto per verificarne l'accuratezza, la coerenza e la qualità. Il revisore si assicura che l'articolo sia ben scritto, privo di errori grammaticali o di informazioni fuorvianti, e che sia in linea con le linee guida e gli standard dell'editore o della piattaforma.</p>
            </div>
        </div>
    </div>
    <div class="container my-1 mt-1">
        <div class="row justify-content-center ">
            <div class="my-3  col-12 col-md-6 my-5">
                <h2>Im a Writer</h2>
                <p class="ms-1">Un writer è un professionista della scrittura che si occupa di creare contenuti scritti per diverse finalità e piattaforme. Il loro compito principale è quello di esprimere concetti, idee o informazioni in modo chiaro, coinvolgente e ben strutturato. I writer possono lavorare su una vasta gamma di materiali, come articoli, blog, contenuti per siti web, pubblicità, copie promozionali, script, storie, e molto altro. Essi devono adattarsi al tono e al linguaggio richiesto dal progetto, mantenendo sempre una comunicazione efficace con il pubblico target. La ricerca, l'organizzazione delle informazioni e la creatività sono elementi fondamentali per il successo del lavoro di un writer.</p>
            </div>
        </div>
    </div> --}}

    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class=" text-center italic">Ecco i ruoli disponili</h1>
              </fieldset>
            </div>
        </div>
    </div> 

    <div class="container mt-3 mb-2 my-5 contenuto animazione">
        <div class="row justify-content-start">
            <div class="my-3 col-12 col-md-6 my-5">
                <div class="d-flex align-items-center justify-content-center rounded-circle  text-white circle-icon">
                    <img src="https://picsum.photos/300" alt="Icona" class="rounded-circle contornoimg">
                </div>
                <h2 class="mt-3 text-center text-dark">Diventa Amministratore</h2>
                <p class="ms-1 text-dark">Il compito di un amministratore che gestisce un articolo è monitorare e moderare il contenuto, assicurandosi che sia conforme alle linee guida, rispondere ai commenti o interazioni degli utenti e garantire la qualità e l'accuratezza del materiale pubblicato.</p>
            </div>
            <div class="my-3 col-12 col-md-6 my-5 text-end contenuto animazione">
                <div class="d-flex align-items-center justify-content-center rounded-circle  text-white circle-icon">
                    <img src="https://picsum.photos/302" alt="Icona" class="rounded-circle contornoimg">
                </div>
                <h2 class="mt-3 text-center text-dark">Diventa Revisore</h2>
                <p class="ms-1 text-dark">Il compito di un revisore che gestisce un articolo è quello di analizzare attentamente il contenuto per verificarne l'accuratezza, la coerenza e la qualità. Il revisore si assicura che l'articolo sia ben scritto, privo di errori grammaticali o di informazioni fuorvianti e che sia in linea con le linee guida e gli standard dell'editore o della piattaforma.</p>
            </div>
        </div>
        <div class="row justify-content-center contenuto animazione">
            <div class="mt-1 col-12 col-md-6 my-5">
                <div class="d-flex align-items-center justify-content-center rounded-circle text-white circle-icon">
                    <img src="https://picsum.photos/301" alt="Icona" class="rounded-circle contornoimg ">
                </div>
                <h2 class="mt-3 text-center text-dark">Diventa Scrittore</h2>
                <p class="ms-1 text-dark">Uno scrittore è un professionista della scrittura che si occupa di creare contenuti scritti per diverse finalità e piattaforme. Il loro compito principale è quello di esprimere concetti, idee o informazioni in modo chiaro, coinvolgente e ben strutturato. Gli scrittori possono lavorare su una vasta gamma di materiali, come articoli, blog, contenuti per siti web, pubblicità, copie promozionali, sceneggiature, storie e molto altro. Devono adattarsi al tono e al linguaggio richiesto dal progetto, mantenendo sempre una comunicazione efficace con il pubblico target. La ricerca, l'organizzazione delle informazioni e la creatività sono elementi fondamentali per il successo del lavoro di uno scrittore.</p>
            </div>
        </div>
    </div>
    
    

    <div class="container-fluid contenuto animazione">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="p-5 border border-3 rounded mb-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Scegli qui</option>
                                <option value="admin">Admin</option>
                                <option value="revisor">Revisore</option>
                                <option value="writer">Writer</option>
                            </select>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Parlaci di te</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Raccontaci la tua storia, descriviti come persona e perchè dovremmo assumerti">{{old('message')}}</textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-info">Invia candidatura</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</x-layout>
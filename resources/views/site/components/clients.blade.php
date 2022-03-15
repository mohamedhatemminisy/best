 
  <section class="clients">
    <div class="container">
      <div class="content">
        <div class="clients-carousel owl-carousel owl-theme">
          @foreach ($clients as $client)
               
              <div class="item"><img class="img-fluid" data-src="{{ asset($client->logo) }}" alt=""></div>
          @endforeach
          
  
        </div>
      </div>
    </div>
  </section>  
 

  
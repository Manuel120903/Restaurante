  <div class="col-2"></div>
  <div class="col-9">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cliente</th>
          <th scope="col">Imagen</th>
          <th scope="col">Mesa</th>
          
          
         
        </tr>
      </thead>
      <tbody>
        @foreach ($order as $order)
      <tr>
       <th scope="row">{{$order->id}}</th>
       <th>{{$order->name}}</th>
       <th>{{$order->img1}}</th>
       <th>{{$order->table_id}}</th>

       
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
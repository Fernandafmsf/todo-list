@extends('site.layout')

@section('title', 'To do List')

@section('conteudo')

{{-- <div class="container-md"> --}}
  {{-- <h1>A fazer </h1>

  <div class=" container-md list-group-item ">
    <div class=" d-flex w-100 justify-content-between">

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="tarefa" id="tarefa">
        <label for="tarefa" class="custom-control-label font-weight-bold mb-1">Nome da tarefa</label>
      </div>
      <small>data criaçao</small>
    </div>

    <p class="mb-1">Descriçao da tarefa</p>
  </div>

</div> --}}

<section class="container-lg">
		<div class="container">
			
			<div class=" text-center">
				<h2 class="heading-section mb-5">To do</h2>
			</div>
          
			<div class="container-md">

        <form  class="container-md form-row" action="{{route('task-store')}}" method="POST" >

          @csrf

          @auth
          
            <input type="hidden" name="id_user" value="{{auth()->user()->id}}">

          @endauth
          <div class="col-md-10 ">
            <div data-mdb-input-init class="form-outline ml-1">
              <input type="text" id="description" name="description" class="form-control " placeholder="Add a task..." />
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-outline">
              <button type="submit" class=" form-control btn btn-primary ml-1" >Add</button>
            </div>
          </div>  
            
        </form>
					
						<ul class="ks-cboxtags">
        
              @foreach($tasks as $task)
					      <li>
                  <input type="checkbox" id="{{$count}}" value="Order {{$count}}">
					    	  <label for="{{$count}}">{{$task->description}}</label>
                </li>
                @php($count++)
              @endforeach
              
					  </ul>

           
				
				</div>
			</div>
		</section>

  
    


@endsection
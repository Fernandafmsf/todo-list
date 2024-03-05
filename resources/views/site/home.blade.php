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

<section class="container-md">
			<div class="container">
			
					<div class=" text-center">
						<h2 class="heading-section mb-5">To do</h2>
				  </div>
          
				<div class="row justify-content-center">
					<div class="col-md-4">
						<ul class="ks-cboxtags">
              @foreach($tasks as $task)
					      <li>
                  <input type="checkbox" id="checkboxOne" value="Order One">
					    	  <label for="checkboxOne">{{$task->tarefa}}</label>
                </li>
              @endforeach
              
					  </ul>
					</div>
				</div>
			</div>
		</section>

  
    


@endsection
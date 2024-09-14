<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>        
        <main class="container"> <br/>
            <div class="card">
                <div class="card-header">Aplicación de Tareas en Laravel</div>
                <div class="card-body">
                    <form action="{{ url('/') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="task" class="form-label">Tarea</label>
                            <input
                                type="text"
                                class="form-control"
                                name="task"
                                id="task"
                                aria-describedby="helpId"
                                placeholder="Describa su tarea"
                            /> <br/>
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Crear tarea
                        </button>
                       </form>
                       <br>
                       <br>
                       <div
                        class="table-responsive"
                       >
                        <table
                            class="table table-primary table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">Acción</th>
                                    <th scope="col">Descripción de tarea</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                    <td>
                                        <form action="{{ route('task.destroy', $task->id )}}" method="post">
                                            @csrf
                                            @method('DELETE') 
                                            <input type="submit" value="X" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>{{ $task->task }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       </div>
                       
                       
                    </div>
                    
                    
                </div>
                <div class="card-footer text-muted">Powered by Markos Sánchez</div>
            </div>
            
        </main>
        
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

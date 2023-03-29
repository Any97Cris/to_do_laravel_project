<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do-App</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            a
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progesso do Dia</h2>
                        <hr class="LinhaHeader" />
                        Data
                    </div>  
                    <div class="graph_header-subtitle">Tarefa <b>3/6</b></div>  
                    <div class="graph-placeholder" ></div>     
                    
                    <p class="graph_header-tasks_left">Restam 3 tarefas para serem realizadas</p>
                    
                </section>
                <section class="list">
                    <div class="list-header">
                        <select name="" id="" class="list_header-select">
                            <option value="1">Todas as Tarefas</option>
                        </select>
                    </div>
                    <div class="task_list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" />
                                <div class="task_title">Título da Tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da Tarefa</div>
                            </div>
                            <div class="action">
                                Editar - Excluir
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
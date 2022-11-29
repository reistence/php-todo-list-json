<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark">
   <div id="app" class="text-white">
    <div class="container py-3">
       <h1 class="text-center">ToDo List</h1>
    <div class="row justify-content-center">

    <div class="col-7">
         <ul class="list-group">
            <li class="list-group-item list-group-item-dark d-flex justify-content-between"
            v-for="todo, index in todoList"
            :key="index"
            > 
            <div>
                
                <p @click="crossToDo(index)"  :class="todo.done ? 'done' : '' ">
                    {{todo.text}} 
                </p>
                <i  v-if="todo.done" class="fa-solid fa-check"></i>
            </div>
                <i @click="deleteToDo(index)" class="fa-solid fa-xmark"></i></li>
       
        </ul>
    </div>
    <div class="row justify-content-center mt-3 align-items-center">
        <div class="col-7 align-items-end d-flex  justify-content-between">
            <input  @keyup.enter="addToDo"  class="my-input" type="text" placeholder="Insert a new item" aria-label="Insert a new item" v-model="newTodo.text">
            <button class="btn btn-danger mt-2" @click="addToDo" >Save</button>
        </div>
    </div>
    </div>

   </div>
   </div>
    

   <script src="js/script.js"></script>
</body>
</html>
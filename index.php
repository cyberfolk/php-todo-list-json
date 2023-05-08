<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/head.php" ?>

<body class="bg-primary">


  <div id='app'>
    <?php include __DIR__ . "/assets/header.php" ?>
    <main id="app_main">
      <div class="container">

        <div class="card shadow col-3 m-auto mb-4">
          <!-- /.add_task -->
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between" v-for="(task, index) in tasks" :class="{completed : task.done}">
              <div @click="toggleDoneTask(index)" role="button">{{task.name}}</div>
              <button @click="completeTask(index)" class="bg-danger border-0 rounded py-1 px-2">
                <i class="fa-solid fa-trash-can text-light"></i>
              </button>
            </li>
          </ul>
        </div>
        <!-- /.card -->

        <form class="add_task col-3 m-auto">
          <div class="input-group mb-3">
            <input type="text" name="new_task" id="new_task" class="form-control " v-model="new_task" @keyup.enter="add_task" placeholder="Type a task here">
            <button class="input-group-text" @click="add_task">Add</button>
          </div>
        </form>
        <!-- /.add_task -->

      </div>
      <!-- /.container -->
    </main>
    <!-- /#app_main -->
  </div>
  <!-- /#app -->



  <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
  <!-- Development only cdn, disable in production -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src='./app.js'></script>
</body>

</html>
const { createApp } = Vue;

createApp({
  data() {
    return {
      todoList: [],
      newTodo: {
        text: "",
        done: false,
      },
    };
  },
  created() {
    axios.get("server.php").then((resp) => {
      this.todoList = resp.data;
    });
  },
  methods: {
    addToDo() {
      const data = {
        newTodo: this.newTodo.text,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.todoList = resp.data;
          this.newTodo = "";
        });
    },
    crossToDo(index) {
      // this.todoList[index].done = !this.todoList[index].done;

      const data = {
        thisDone: index,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.todoList = resp.data;
        });
    },

    deleteToDo(index) {
      // this.todoList.splice(index, 1);
      const data = {
        thisTodo: index,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.todoList = resp.data;
        });
    },
  },
}).mount("#app");

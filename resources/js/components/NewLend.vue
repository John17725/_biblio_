<template>
  <div class="container">
    <div class="input-group mb-1">
      <input
        type="text"
        id="enrollmentStudent"
        class="form-control"
        placeholder="Ingrese la matricula del alumno"
        aria-label="Recipient's username"
        aria-describedby="button-addon2"
      />
      <button
        class="btn btn-outline-secondary"
        type="button"
        id="button-search-student"
        v-on:click="searchStudent"
      >
        Buscar
      </button>
    </div>
    <div class="content-data-student" v-if="showformstudent">
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombre</label>
          <input
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="name"
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Matricula</label>
          <input
            type="text"
            class="form-control"
            id="inputPassword4"
            :value="enrollment"
          />
        </div>
        <div class="col-md-2">
          <label for="inputEmail4" class="form-label">Grado</label>
          <input
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="grade"
          />
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Grupo</label>
          <input
            type="text"
            class="form-control"
            id="inputPassword4"
            :value="group"
          />
        </div>
        <div class="col-md-8">
          <label for="inputCity" class="form-label">Carrera</label>
          <input
            type="text"
            class="form-control"
            id="inputCity"
            :value="career"
          />
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Curp</label>
          <input
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="curp"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: "",
      enrollment: "",
      grade: "",
      group: "",
      career: "",
      curp: "",
      showformstudent: false,
    };
  },
  methods: {
    async searchStudent() {
      var enrollmentStudent =
        document.getElementById("enrollmentStudent").value;
      // console.log(enrollmentStudent);
      this.getStudentData(enrollmentStudent);
    },
    getStudentData(enrollmentStudent) {
      let getdatastudent = window.routes.getdatastudent;
      console.log(getdatastudent);
      axios
        .get(getdatastudent, {
          params: {
            enrollment: enrollmentStudent,
          },
        })
        .then((res) => {
          console.log(JSON.stringify(res.data));
          this.responseStudent = res.data;
          if (this.responseStudent == "null") {
            this.showformstudent = false;
          } else {
            this.showformstudent = true;
            this.name = res.data.name + " " + res.data.last_name;
            this.enrollment = res.data.enrollment;
            this.grade = res.data.grade;
            this.group = res.data.group;
            this.career = res.data.career;
            this.curp = res.data.CURP;
          }
        });
      // console.log("Hola mundo",enrollmentStudent);
    },
  },
  created() {
    console.log("Component mounted.");
  },
};
</script>
<style scoped>
.container {
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.content-data-student {
  margin-top: 30px;
  /* background: papayawhip; */
}
</style>
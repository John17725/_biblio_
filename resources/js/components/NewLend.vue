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
    <div class="content-data-student mt-2" v-if="showformstudent">
      <h2>Alumno</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombre</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="name"
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Matricula</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputPassword4"
            :value="enrollment"
          />
        </div>
        <div class="col-md-2">
          <label for="inputEmail4" class="form-label">Grado</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="grade"
          />
        </div>
        <div class="col-md-2">
          <label for="inputPassword4" class="form-label">Grupo</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputPassword4"
            :value="group"
          />
        </div>
        <div class="col-md-8">
          <label for="inputCity" class="form-label">Carrera</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputCity"
            :value="career"
          />
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Curp</label>
          <input
            readonly
            type="text"
            class="form-control"
            id="inputEmail4"
            :value="curp"
          />
        </div>
        <button type="button" class="btn btn-info"  v-on:click="newLend">Generar prestamo de libro</button>
      </form>
      <div class="col-md-" v-if="showfromNewLend">
        <div class="input-group mb-1">
          <input
            type="text"
            id="booktitle"
            class="form-control"
            placeholder="Ingrese titulo del libro"
            aria-label="Recipient's username"
            aria-describedby="button-addon2"
          />
          <button
            class="btn btn-outline-secondary"
            type="button"
            id="button-search-student"
            v-on:click="searchBook"
          >
            Buscar
          </button>
        </div>
        <div class="list-group" v-if="showlistBooks">
          <span class="list-group-item list-group-item-action mt-2" 
          readonly
          aria-current="true" 
          v-for="book in books" 
          v-on:click="lendGetBook(book)">{{book.title}} - Autor: {{book.author}} - {{book.pages}} Paginas - {{book.pieces}} piezas disponibles</span>
        </div>
        <div class="list-group mt-3" v-if="showFromBook">
          <h2>Detalles de libro a prestar</h2>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Titulo</label>
                <input readonly type="text" class="form-control" id="inputEmail4" :value="bookLend.title">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Autor</label>
                <input readonly type="text" class="form-control" id="inputPassword4" :value="bookLend.author">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Paginas</label>
              <input readonly type="text" class="form-control" id="inputAddress" :value="bookLend.pages">
            </div>
            <div class="form-group">
              <label for="inputAddress2">ISB</label>
              <input readonly type="text" class="form-control" id="inputAddress2" :value="bookLend.ISBN">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Edicion</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="bookLend.edition">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Editorial</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="bookLend.editorial">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Numero de serie</label>
                <input readonly type="text" class="form-control" id="inputZip" :value="bookLend.serialnumber">
              </div>
            </div>
            <span  class="btn btn-primary mt-2" v-on:click="agregarotrolibro">Agregar otro libro</span>
            <span  class="btn btn-success mt-2" v-if="primary"  v-on:click="finalizarPrestamo">Confirmar prestamo</span>
          </form>
        </div>
      </div>
      <div class="list-group" v-if="showlistBookslend">
          <h2>Lista de libros a prestar</h2>
          <span class="list-group-item list-group-item-action mt-2" 
          readonly
          aria-current="true" 
          v-for="book in listbooklend" 
          >{{book.title}} - Autor: {{book.author}} - {{book.pages}} Paginas - {{book.pieces}} piezas disponibles</span>
            <span  class="btn btn-success mt-2" v-on:click="finalizarPrestamogrupo">Confirmar prestamo</span>
        </div>
    </div>
  </div>
</template>

<script>
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

export default {
  data() {
    return {
      name: "",
      enrollment: "",
      grade: "",
      group: "",
      career: "",
      curp: "",
      alumnoLend: {},
      books: [],
      bookLend: {},
      showformstudent: false,
      showfromNewLend: false,
      showlistBooks: true,
      showFromBook: false,
      showlistBookslend: false,
      listbooklend: [],
      primary: true,
    };
  },
  methods: {
    async searchStudent() {
      var enrollmentStudent =
        document.getElementById("enrollmentStudent").value;
      // console.log(enrollmentStudent);
      this.getStudentData(enrollmentStudent);
    },
    async searchBook(){
      this.showlistBooks=true;
      const booktitle = document.getElementById("booktitle").value;
      console.log(booktitle);
      this.getBookData(booktitle)
    },
    lendGetBook(book){
      if(book.pieces == 0){
        Swal.fire('No hay existencias para prestamos')
      }else{
        this.showlistBooks = false;
        console.log('Libro a prestar',book);
        this.bookLend = book;
        this.showFromBook = true;
      }
    },
    newLend(){
      this.showfromNewLend = true;
    },
    getBookData(titleBook){
      let getdataBook = window.routes.getbookdatalend;
      axios.get(getdataBook, {
        params: {
          title: titleBook,
        },
      })
      .then((res) => {
        console.log(res.data)
        if(res.data === "null"){
          Swal.fire('No se hallaron libros')
        }else{
          this.books = res.data;
        }
      });
    },
    async agregarotrolibro(){
      this.primary=false;
      this.showlistBookslend = true;
      console.log('Datos alumno que realiza prestamo:', this.alumnoLend.id);
      console.log('Datos libro a prestar:', this.bookLend.id);
      this.listbooklend.push(this.bookLend);
      console.log(this.listbooklend)
    },
    async finalizarPrestamogrupo(){
      console.log('Datos alumno que realiza prestamo:', this.alumnoLend.id);
      console .log('Datos libros a prestar:', this.listbooklend);
      this.postDataLends(this.alumnoLend.id,this.listbooklend);
    },
    async finalizarPrestamo(){
      console.log('Datos alumno que realiza prestamo:', this.alumnoLend.id);
      console.log('Datos libro a prestar:', this.bookLend.id);
      this.postDataLend(this.alumnoLend.id,this.bookLend.id);
    },
    postDataLends(_idAlumno, _idBooks){
      let postnewlends = window.routes.postnewlends;
      axios.post(postnewlends, {
        idAlumno: _idAlumno,
        idBook: _idBooks
      })
      .then( (response) => {
        Swal.fire({
            title: response.data.message+' Folios: '+response.data.folios,
            confirmButtonText: 'Ok',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.reload()
            }
          })
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    postDataLend(_idAlumno, _idBook){
      let postnewlend = window.routes.postnewlend;
      axios.post(postnewlend, {
        idAlumno: _idAlumno,
        idBook: _idBook
      })
      .then( (response) => {
        console.log(response);
        if(response.data.status === 'success'){
          Swal.fire({
            title: response.data.message+' Folio: '+response.data.folio,
            confirmButtonText: 'Ok',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.reload()
            }
          })
        }else{
          Swal.fire({
            title: response.data.message,
            confirmButtonText: 'Ok',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.reload()
            }
          })
        }
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    getStudentData(enrollmentStudent) {
      let getdatastudent = window.routes.getdatastudent;
      // console.log(getdatastudent);
      axios
        .get(getdatastudent, {
          params: {
            enrollment: enrollmentStudent,
          },
        })
        .then((res) => {
          // console.log(JSON.stringify(res.data));
          this.responseStudent = res.data;
          if (res.data == "null") {
            this.showformstudent = false;
            Swal.fire('No se encontro al Alumno')
          } else {
            this.alumnoLend = res.data;
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
    // console.log("Component mounteadasdasdsdsdadasdad.");
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
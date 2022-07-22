<template>
    <div class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id='titlebuscar' placeholder="Busqueda por titulo de libro" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" v-on:click="getSearchTitle" id="button-addon2">Buscar</button>
            </div>
        </div>
        <div class="input-group mb-3 mt-2">
            <input type="text" class="form-control" id='authorbuscar' placeholder="Busqueda por autor del libro" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" v-on:click="getSearchAuthor" id="button-addon2">Buscar</button>
            </div>
        </div>
        <div class="list-group" v-if="showlistBooks">
          <span class="list-group-item list-group-item-action mt-2" 
          readonly
          aria-current="true" 
          v-for="book in books" 
          v-on:click="lendGetBook(book)">{{book.title}} - Autor: {{book.author}} - {{book.pages}} Paginas - {{book.pieces}} piezas disponibles</span>
        </div>
        <div class="list-group mt-3" v-if="showFromBook">
          <h2>Detalles del libro</h2>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Titulo</label>
                  <input readonly type="text" class="form-control" id="inputEmail4" :value="book.title">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Autor</label>
                <input readonly type="text" class="form-control" id="inputPassword4" :value="book.author">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 1</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_1">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 2</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_2">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 3</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_3">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 4</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 5</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_5">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 6</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_6">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 7</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_7">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 8</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_8">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 9</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_9">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Capitulo 10</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.capitulo_10">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Paginas</label>
              <input readonly type="text" class="form-control" id="inputAddress" :value="book.pages">
            </div>
            <div class="form-group">
              <label for="inputAddress">Clasificacion </label>
              <input readonly type="text" class="form-control" id="inputAddress" :value="book.clasification">
            </div>
            <div class="form-group">
              <label for="inputAddress2">ISB</label>
              <input readonly type="text" class="form-control" id="inputAddress2" :value="book.ISBN">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Edicion</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.edition">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Editorial</label>
                <input readonly type="text" class="form-control" id="inputCity" :value="book.editorial">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Numero de serie</label>
                <input readonly type="text" class="form-control" id="inputZip" :value="book.serialnumber">
              </div>
            </div>
            <button type="button" class="btn btn-danger mt-3"  v-on:click="() => {showFromBook = !showFromBook}">Cerrar</button>
          </form>
        </div>
    </div>
</template>

<script>
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
    export default {
        data() {
            return {
                showDetailBook: true,
                titleSearch: "",
                books: [],
                book: {},
                showlistBooks: true,
                showFromBook: false
            }
        },
        methods: {
            async getSearchTitle(){
                const booktitle = document.getElementById("titlebuscar").value;
                console.log('bbbb',booktitle);
                this.gettitles(booktitle)
                
            },
            async getSearchAuthor(){
                const author = document.getElementById("authorbuscar").value;
                console.log('aaaaa',author,);
                this.getauthors(author)
                
            },
            gettitles(_title){
                let getdata = window.routes.getbookdata;
                axios.post(getdata, {
                    title: _title
                }).then( (response) => {
                    this.books = response.data.data 
                    // console.log(response.data.data)
                } )
            },
            getauthors(_author){
                let getdata = window.routes.getbookdata;
                axios.post(getdata, {
                    author: _author
                }).then( (response) => {
                    this.books = response.data.data 
                    console.log(response.data.data)
                } )
            },
            lendGetBook(book){
                this.showFromBook = true;
                console.log('Libro a prestar',book);
                this.book = book;
            },
        },
    }
</script>   
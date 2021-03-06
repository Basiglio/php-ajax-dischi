import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({
  el: '#app',
  data: {
    logo: "https://i.pinimg.com/originals/83/3c/f5/833cf5fe43f8c92c1fcb85a68b29e585.png",
    albums:[],
    genre: "",
  },
  mounted: function () {
    axios
    .get('server.php') 
    .then((response) => {
    this.albums = response.data; 
    });
  },
  methods: {
    filter: function () {
      axios //FACCIO LA CHIAMATA AL SERVER
      .get('server.php', {
        //PASSO AL SERVER IL PARAMETRO DEL VALUE DELLA SELECT
        params: {
          genre: this.genre,
        },
      }) 
      .then((response) => {
      this.albums = response.data; 
      });
    },
  },
})
